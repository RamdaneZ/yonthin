<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    
        // Handle image1
        $image = time() . "_." . $request->file('image')->getClientOriginalExtension();
        // Store image1 directly in the public/categories folder
        $request->file('image')->move(public_path('categories'), $image);
    
        // Create the new service record with Arabic and English fields
        Category::create([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'slug' => Str::slug($request->name_en),
            'image' => $image,
        ]);
    
        return redirect('admin/categories')->with('success', 'Catégorie créé avec succès');
    }
    
    public function update(Category $id, Request $request){
        $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
        ]);
    
        // Handle image1
        if ($request->hasFile('image')) {
            $image = time() . "_." . $request->file('image')->getClientOriginalExtension();
            // Store image1 directly in the public/categories folder
            $request->file('image')->move(public_path('categories'), $image);
            // Delete the old image if it exists
            if ($id->image && file_exists(public_path('categories/' . $id->image))) {
                unlink(public_path('categories/' . $id->image));
            }
        } else {
            $image = $id->image; // Keep the old image if no new one is uploaded
        }
    
        // Update the service with the new data
        $id->update([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'slug' => Str::slug($request->name_en),
            'image' => $image,
        ]);
    
        return redirect('admin/categories')->with('success', 'Catégorie modifié avec succès');
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
