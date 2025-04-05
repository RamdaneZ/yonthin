<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderByDesc('id')->get();
        return view('admin.products.index')->with(['products'=>$products]);
    }

    public function add(){
        $categories = Category::orderByDesc('id')->get();
        return view('admin.products.add')->with(['categories'=>$categories]);
    }

    public function edit(Product $product){
        $categories = Category::orderByDesc('id')->get();
        return view('admin.products.edit')->with(['id'=>$product,'categories'=>$categories]);
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => ['required', 'integer'],
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'description_ar' => ['nullable', 'string'],
            'description_fr' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'adv_ar' => ['nullable', 'string'],
            'adv_fr' => ['nullable', 'string'],
            'adv_en' => ['nullable', 'string'],
            'image' => ['required', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image2' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image3' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image4' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image5' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image6' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'video' => ['nullable', 'mimes:mp4,mov,ogg,webm'],
        ]);
    
        $manager = new ImageManager(new Driver());
        $images = [];
    
        // Dynamic image handling
        for ($i = 1; $i <= 6; $i++) {
            $key = $i === 1 ? 'image' : 'image' . $i;
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . "_$i.webp";
                $encoded = $manager->read($file->getPathname())->toWebp(60);
                Storage::disk('public')->put('products/' . $fileName, $encoded->toString());
                $images[$key] = $fileName;
            }
        }
    
        // Process video
        $videoPath = null;
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $videoPath = 'products/videos/' . $videoName;
            Storage::disk('public')->putFileAs('products/videos', $video, $videoName);
        }
    
        // Advantages formatting
        $adv_ar = $request->adv_ar ? json_encode(array_map('trim', explode(',', $request->adv_ar))) : null;
        $adv_fr = $request->adv_fr ? json_encode(array_map('trim', explode(',', $request->adv_fr))) : null;
        $adv_en = $request->adv_en ? json_encode(array_map('trim', explode(',', $request->adv_en))) : null;
    
        // Create product
        Product::create([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'category_id' => $request->category_id,
            'description_ar' => $request->description_ar,
            'description_fr' => $request->description_fr,
            'description_en' => $request->description_en,
            'adv_ar' => $adv_ar,
            'adv_fr' => $adv_fr,
            'adv_en' => $adv_en,
            'slug' => Str::slug($request->name_en),
            'image' => $images['image'] ?? null,
            'image2' => $images['image2'] ?? null,
            'image3' => $images['image3'] ?? null,
            'image4' => $images['image4'] ?? null,
            'image5' => $images['image5'] ?? null,
            'image6' => $images['image6'] ?? null,
            'video' => $videoPath,
        ]);
    
        return redirect('admin/products')->with('success', 'Produit crée avec succès');
    }
    


    public function update(Product $product, Request $request) {
        // Validate the request
        $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image2' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image3' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
        ]);
    
        $manager = new ImageManager(new Driver());
        $updatedImages = [];
    
        // Process primary image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . ".webp";
            $encoded = $manager->read($image->getPathname())->toWebp(60);
            Storage::disk('public')->put('products/' . $fileName, $encoded->toString());
    
            // Delete old image if it exists
            if ($product->image) {
                Storage::disk('public')->delete('products/' . $product->image);
            }
    
            $updatedImages['image'] = $fileName;
        }
    
        // Process image2
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $fileName2 = time() . "_2.webp";
            $encoded2 = $manager->read($image2->getPathname())->toWebp(60);
            Storage::disk('public')->put('products/' . $fileName2, $encoded2->toString());
    
            // Delete old image2 if it exists
            if ($product->image2) {
                Storage::disk('public')->delete('products/' . $product->image2);
            }
    
            $updatedImages['image2'] = $fileName2;
        }
    
        // Process image3
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $fileName3 = time() . "_3.webp";
            $encoded3 = $manager->read($image3->getPathname())->toWebp(60);
            Storage::disk('public')->put('products/' . $fileName3, $encoded3->toString());
    
            // Delete old image3 if it exists
            if ($product->image3) {
                Storage::disk('public')->delete('products/' . $product->image3);
            }
    
            $updatedImages['image3'] = $fileName3;
        }
    
        // Update the product record
        $product->update(array_merge([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name_en),
        ], $updatedImages));
    
        return redirect('admin/products')->with('success', 'Produit modifiée avec succès');
    }

    public function delete(Category $id){
        // Delete the image files from the public directory if they exist
        if ($id->image && file_exists(public_path('categories/' . $id->image))) {
            unlink(public_path('categories/' . $id->image));
        }

        // Delete the service record from the database
        $id->delete();

        return back()->with('success', 'Catégorie supprimé avec succès');
    }
}
