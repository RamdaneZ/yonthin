<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\CatalogueOrder;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        if(Session::has('is_admin')){
            return redirect('admin/dashboard');
        }
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|max:255',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $request->password === $admin->password) {
            session(['is_admin' => $admin->id]);
            return redirect('admin/dashboard');
        }

        return back()->withErrors(['error' => "Les informations d'admin sont incorrectes"]); // Return with error
    }

    public function logout(){
        Session::flush();
        return redirect('admin/')->with('success','Vous êtes déconnecté avec succès');
    }

    public function dashboard(){
        $admins = Admin::count();
        $messages = Message::orderByDesc('id')->get();
        $products = Product::count();
        $categories = Category::count();
        $devis = CatalogueOrder::count();
        return view('admin.dashboard')->with(['admins' =>$admins,'messages'=>$messages,'products'=>$products,'categories'=>$categories,'devis'=>$devis]);
    }

    public function profile(){
        $data = Admin::where('id',session('is_admin'))->first();
        return view('admin.profile')->with('data',$data);
    }

    public function editprofile(Request $request){
        $admin = Admin::where('id',session('is_admin'))->first();
        $request->validate([
            'username' => ['required','string','max:255'],
            'password' => ['required','string','max:255'],
        ]);
        if($request->password == $admin->password){
            $password = $admin->password;
            if($request->new_password != null){
                $password = $request->new_password;
            }
            $admin->update([
                'username' => $request->username,
                'password' => $password,
            ]);
            return back()->with('success','Information modifié avec succés');
        }
        return back()->with('error','Mot de passe incorrect');
    }

    public function settings(){
        $data = Setting::first();
        return view('admin.settings')->with('data',$data);
    }

    public function settings_update(Request $request){
        $info = Setting::first();

        $info->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'tiktok' => $request->tiktok,
        ]);

        return back()->with('success', 'Informations modifiées avec succès');
    }


    public function homepage(){
        $sliders = Slider::orderByDesc('id')->get();
        return view('admin.homepage.index')->with(['sliders'=>$sliders]);
    }

    public function homepage_store(Request $request){
        $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_fr' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'subtitle_ar' => ['nullable', 'string', 'max:255'],
            'subtitle_fr' => ['nullable', 'string', 'max:255'],
            'subtitle_en' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'btnText_ar' => ['nullable', 'string', 'max:255'],
            'btnText_fr' => ['nullable', 'string', 'max:255'],
            'btnText_en' => ['nullable', 'string', 'max:255'],
            'url' => ['nullable', 'string'],
        ]);
    
        $fileName = null;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
        
            // Generate a unique WebP file name
            $fileName = time() . ".webp";
        
            // Create an instance of ImageManager with GD driver
            $manager = new ImageManager(new Driver());
        
            // Convert and encode the image to WebP format
             $encoded = $manager->read($image->getPathname())
                ->cover(1920, 800) // Crop to exact slider size
                ->toWebp(60); // 0-100 quality
        
            // Save the WebP image in the storage/public/sliders directory
            Storage::disk('public')->put('sliders/' . $fileName, $encoded->toString()); 
        }
    
        Slider::create([
            'title_ar' => $request->title_ar,
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'subtitle_ar' => $request->subtitle_ar,
            'subtitle_fr' => $request->subtitle_fr,
            'subtitle_en' => $request->subtitle_en,
            'image' => $fileName,
            'btnText_ar' => $request->btnText_ar,
            'btnText_fr' => $request->btnText_fr,
            'btnText_en' => $request->btnText_en,
            'url' => $request->url,
        ]);
        
        return response()->json([
            'redirect' => url('admin/homepage/'), // or '/admin/categories'
            'message' => 'Slider créé avec succès'
        ]);

    }
    
    public function homepage_edit(Slider $slider){
        return view('admin.homepage.edit')->with('slider',$slider);
    }

    public function homepage_update(Request $request, Slider $slider){
        $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_fr' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'subtitle_ar' => ['nullable', 'string', 'max:255'],
            'subtitle_fr' => ['nullable', 'string', 'max:255'],
            'subtitle_en' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'btnText_ar' => ['nullable', 'string', 'max:255'],
            'btnText_fr' => ['nullable', 'string', 'max:255'],
            'btnText_en' => ['nullable', 'string', 'max:255'],
            'url' => ['nullable', 'string'],
        ]);
    
        // Store the current image name
        $fileName = $slider->image;
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
    
            // Generate a new WebP filename
            $fileName = time() . ".webp";
    
            $manager = new ImageManager(new Driver());

            // Read, crop to slider size, and encode to WebP
            $encoded = $manager->read($image->getPathname())
                ->cover(1920, 800) // Crop to exact slider size
                ->toWebp(60); // 0-100 quality
        
            // Store in public disk under 'sliders' folder
            Storage::disk('public')->put('sliders/' . $fileName, $encoded->toString());
        
            // Delete old image if it exists
            if ($slider->image && Storage::disk('public')->exists('sliders/' . $slider->image)) {
                Storage::disk('public')->delete('sliders/' . $slider->image);
            }
        }
    
        $slider->update([
            'title_ar' => $request->title_ar,
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'subtitle_ar' => $request->subtitle_ar,
            'subtitle_fr' => $request->subtitle_fr,
            'subtitle_en' => $request->subtitle_en,
            'image' => $fileName, // Store only the filename
            'btnText_ar' => $request->btnText_ar,
            'btnText_fr' => $request->btnText_fr,
            'btnText_en' => $request->btnText_en,
            'url' => $request->url,
        ]);
    
        return response()->json([
            'redirect' => url('admin/homepage/'),
            'message' => 'Slider modifié avec succès'
        ]);
    }
    
    
    public function homepage_delete(Slider $slider){
        // Get the image filename before deleting the slider
        $imagePath = public_path('sliders/' . $slider->image);

        // Delete the slider record
        $slider->delete();

        // Check if the image exists, then delete it
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        return back()->with('success', 'Slider supprimé avec succès');
    }


    public function messages(){
        $messages = Message::orderByDesc('id')->get();
        return view('admin.messages.index')->with(['messages'=>$messages]);
    }

    public function detail_message(Message $id){
        return view('admin.messages.detail')->with(['id'=>$id]);
    }

    public function delete_message(Message $id){
        $id->delete();
        return redirect('admin/messages')->with('success','Message supprimé avec succéss');
    }

    public function catalogueOrders(){
        $orders = CatalogueOrder::orderByDesc('id')->get();
        return view('admin.catalogueOrders.index')->with(['orders'=>$orders]);
    }

    public function detail_catalogueOrders(CatalogueOrder $id){
        return view('admin.catalogueOrders.detail')->with(['id'=>$id]);
    }

    public function delete_catalogueOrders(CatalogueOrder $id){
        $id->delete();
        return redirect('admin/catalogueOrders')->with('success','Demande de catalogue supprimé avec succéss');
    }

    // Admin section //
    public function admin(){
        $admins = Admin::orderByDesc('id')->get();
        return view('admin.admin.index')->with('admins',$admins);
    }

    public function admin_add(){
        return view('admin.admin.add');
    }

    public function admin_edit(Admin $admin){
        return view('admin.admin.edit')->with('admin',$admin);
    }

    public function admin_delete(Admin $admin){
        $admin->delete();
        return redirect('admin/admin')->with(['success'=>"Admin Supprimé avec succés"]);
    }

    public function admin_store(Request $request){
        $request->validate([
            'username' => ['required','string','max:255','unique:admins'],
            'password' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:admins'],
        ]);
        
        $superAdmin = false;
        if($request->superAdmin){
            $superAdmin = true;
        }
        
        Admin::create([
            'username' => $request->username, 
            'password' => $request->password, 
            'email' => $request->email, 
            'super_admin' => $superAdmin,
        ]);
        
        return redirect('admin/admin')->with('success','Admin creé avec succéss');
    }

    public function admin_update(Admin $admin, Request $request){
        $request->validate([
            'username' => ['required','string','max:255','unique:admins,username,' . $admin->id],
            'password' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:admins,email,' . $admin->id],
        ]);
    
        $superAdmin = $request->has('superAdmin');
    
        $admin->update([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'super_admin' => $superAdmin,
        ]);
    
        return redirect('admin/admin')->with('success', 'Admin modifié avec succès');
    }

}
