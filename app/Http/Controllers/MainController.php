<?php

namespace App\Http\Controllers;

use App\Models\CatalogueOrder;
use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        $categories = Category::orderByDesc('id')->get();
        return view('index')->with(['sliders'=>$sliders,'categories'=>$categories]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function catalogue(){
        return view('catalogue');
    }

    public function catalogue_store(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','string','max:255'],
            'phone' => ['required','string','max:255'],
            'message' => ['nullable','string'],
        ]);

        CatalogueOrder::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return back()->with('success-msg','Success');
        
    }

    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        if(!$category){
            return back();
        }
        $categories = Category::orderByDesc('id')->get();
        $products = Product::where('category_id',$category->id)->paginate(10);
        return view('category')->with(['category'=>$category,'categories'=>$categories,'products'=>$products]);
    }
    
    public function product($slug){
        $product = Product::where('slug', $slug)->first();
        if (!$product) {
            return redirect('/');
        }
    
        $locale = app()->getLocale(); // 'ar', 'fr', 'en'
        $advField = 'adv_' . $locale;
        $featuresField = 'product_features_' . $locale;
    
        $advantages = json_decode($product->$advField, true); // decode to array
        $productFeatures = json_decode($product->$featuresField, true); // decode to array
    
        return view('product')->with([
            'product' => $product,
            'advantages' => $advantages,
            'productFeatures' => $productFeatures,
        ]);
    }
    

    public function service(string $slug){
        $service = Service::where('slug',$slug)->first();
        if($service == null){
            return back();
        }
        return view('service')->with(['service'=>$service]);
    }

    public function sendMessage(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255'],
            'message' => ['required','string'],
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('contact')->with('success-msg','Success');
    }
}
