<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderByDesc('id')->get();
        return view('admin.categories.index')->with(['categories'=>$categories]);
    }

    public function add(){
        return view('admin.categories.add');
    }

    public function edit(Category $id){
        return view('admin.categories.edit')->with(['id'=>$id]);
    }

    public function store(Request $request){
        $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,jpg,png,webp,svg,gif'],
        ]);

        $image = $request->file('image');
        $fileName = time() . ".webp";

        $manager = new ImageManager(new Driver());
        $encoded = $manager->read($image->getPathname())->toWebp(60);
        Storage::disk('public')->put('categories/' . $fileName, $encoded->toString()); 

        Category::create([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'slug' => Str::slug($request->name_en),
            'image' => $fileName,
        ]);

        return response()->json([
            'redirect' => url('admin/categories'), // or use '/admin/categories'
            'message' => 'Catégorie créée avec succès'
        ]);
    }

    public function update(Category $id, Request $request){
        $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . ".webp";

            $manager = new ImageManager(new Driver());
            $encoded = $manager->read($image->getPathname())->toWebp(60);
            Storage::disk('public')->put('categories/' . $fileName, $encoded->toString());

            if ($id->image && Storage::disk('public')->exists('categories/' . $id->image)) {
                Storage::disk('public')->delete('categories/' . $id->image);
            }
        } else {
            $fileName = $id->image;
        }

        $id->update([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'slug' => Str::slug($request->name_en),
            'image' => $fileName,
        ]);

        return response()->json([
            'redirect' => url('admin/categories/'), // or '/admin/categories'
            'message' => 'Catégorie modifiée avec succès'
        ]);
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
