<?php

namespace App\Http\Controllers;

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
        return view('product');
    }

    public function sendCotation(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'societe_name' => ['required','string','max:255'],
            'phone' => ['required','string','min:10'],
            'email' => ['required','string','email','max:255'],
            'from' => ['required','string','max:255'],
            'to' => ['required','string','max:255'],
            'conditionement' => ['required','string','max:255'],
            'type' => ['nullable','string','max:255'],
            'description' => ['nullable','string'],
            'comment' => ['nullable','string'],
            'incoterm' => ['nullable','string'],
        ]);

        Cotation::create([
            'name' => $request->name,
            'societe_name' => $request->societe_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'from' => $request->from,
            'to' => $request->to,
            'conditionement' => $request->conditionement,
            'type' => $request->type,
            'description' => $request->description,
            'comment' => $request->comment,
            'incoterm' => $request->incoterm,
        ]);
        
        return redirect('cotation-en-ligne')->with('success',"Success");
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
