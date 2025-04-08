<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Column;
use App\Models\ColumnValue;
use App\Models\DynamiqueTable;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        $tables = DynamiqueTable::where('product_id',$product->id)->get();
        return view('admin.products.edit')->with(['id'=>$product,'categories'=>$categories,'tables'=>$tables]);
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
            'whatCanDoSection_ar' => ['nullable', 'string'],
            'whatCanDoSection_fr' => ['nullable', 'string'],
            'whatCanDoSection_en' => ['nullable', 'string'],
            'whatCanDoSection_image' => ['nullable','mimes:jpeg,jpg,png,webp,svg,gif'],
            'product_features_en' => ['nullable', 'array'],
            'product_features_fr' => ['nullable', 'array'],
            'product_features_ar' => ['nullable', 'array'],
            'tables' => ['required', 'array'],

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
        $videoName = null;
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $videoPath = 'products/videos/' . $videoName;
            Storage::disk('public')->putFileAs('products/videos', $video, $videoName);
        }
        
       // Handle 'whatCanDoSection_image'
        $whatCanDoSectionImage = null;
        if ($request->hasFile('whatCanDoSection_image')) {
            $file = $request->file('whatCanDoSection_image');
            $fileName = time() . '_whatCanDoSection.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('products/whatWeCanDoSection', $file, $fileName);
            $whatCanDoSectionImage = $fileName; // Store the file name in the database
        }
    
        // Advantages formatting
        $adv_ar = $request->adv_ar ? json_encode(array_map('trim', explode(',', $request->adv_ar))) : null;
        $adv_fr = $request->adv_fr ? json_encode(array_map('trim', explode(',', $request->adv_fr))) : null;
        $adv_en = $request->adv_en ? json_encode(array_map('trim', explode(',', $request->adv_en))) : null;
    
        // Handle product features for each language (English, French, Arabic)
        $features_en = $request->product_features_en ? json_encode(array_map('trim', $request->product_features_en)) : null;
        $features_fr = $request->product_features_fr ? json_encode(array_map('trim', $request->product_features_fr)) : null;
        $features_ar = $request->product_features_ar ? json_encode(array_map('trim', $request->product_features_ar)) : null;
    
        // Create product
        $product = Product::create([
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
            'product_features_en' => $features_en,
            'product_features_fr' => $features_fr,
            'product_features_ar' => $features_ar,
            'slug' => Str::slug($request->name_en),
            'image' => $images['image'] ?? null,
            'image2' => $images['image2'] ?? null,
            'image3' => $images['image3'] ?? null,
            'image4' => $images['image4'] ?? null,
            'image5' => $images['image5'] ?? null,
            'image6' => $images['image6'] ?? null,
            'video' => $videoName,
            'whatCanDoSection_ar' => $request->whatCanDoSection_ar,
            'whatCanDoSection_fr' => $request->whatCanDoSection_fr,
            'whatCanDoSection_en' => $request->whatCanDoSection_en,
            'whatCanDoSection_image' => $whatCanDoSectionImage,
        ]);

        // Store dynamic tables and columns
        foreach ($request->tables as $table) {
            // Create dynamic table record
            $dynamicTable = DynamiqueTable::create([
                'name_fr' => $table['name_fr'],  // Accessing as array
                'name_en' => $table['name_en'],
                'name_ar' => $table['name_ar'],
                'product_id' => $product->id,  // Associating the dynamic table with the product
            ]);

            // Store columns for this dynamic table
            foreach ($table['columns'] as $column) {
                // Create column record
                $columnRecord = Column::create([
                    'name_ar' => $column['name_ar'],  // Column name in Arabic
                    'name_fr' => $column['name_fr'],  // Column name in French
                    'name_en' => $column['name_en'],  // Column name in English
                    'table_id' => $dynamicTable->id   // Associating the column with the dynamic table
                ]);

                // Now store values for the column as rows (not as JSON)
                $valuesCount = max(count($column['values_en']), count($column['values_fr']), count($column['values_ar']));  // Ensure you cover all values for each language

                // Insert each value for the column in each language
                for ($i = 0; $i < $valuesCount; $i++) {
                    $valueEn = $column['values_en'][$i] ?? null;  // Default to null if no value is found
                    $valueFr = $column['values_fr'][$i] ?? null;
                    $valueAr = $column['values_ar'][$i] ?? null;

                    // Create a column value record for each language
                    ColumnValue::create([
                        'column_id' => $columnRecord->id,
                        'value_en' => $valueEn,
                        'value_fr' => $valueFr,
                        'value_ar' => $valueAr,
                    ]);
                }
            }
        }

        return response()->json([
            'redirect' => url('admin/products/'), // or '/admin/categories'
            'message' => 'Produit crée avec succès'
        ]);
    }

    public function update(Product $product, Request $request){
        // Validate the request
        $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image2' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image3' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image4' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image5' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'image6' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'video' => ['nullable', 'mimes:mp4,mov,ogg,webm'],
            'whatCanDoSection_image' => ['nullable', 'mimes:jpeg,jpg,png,webp,svg,gif'],
            'product_features_en' => ['nullable', 'array'],
            'product_features_fr' => ['nullable', 'array'],
            'product_features_ar' => ['nullable', 'array'],
            'tables' => ['nullable', 'array'],
        ]);
    
        $manager = new ImageManager(new Driver());
        $updatedImages = [];
    
        // Handle all 6 image updates
        for ($i = 1; $i <= 6; $i++) {
            $key = 'image' . $i;
            if ($request->hasFile($key)) {
                $image = $request->file($key);
                $fileName = time() . "_$i.webp";
                $encoded = $manager->read($image->getPathname())->toWebp(60);
                Storage::disk('public')->put('products/' . $fileName, $encoded->toString());
    
                // Delete old image if it exists
                if ($product->$key) {
                    Storage::disk('public')->delete('products/' . $product->$key);
                }
    
                $updatedImages[$key] = $fileName;
            }
        }
    
        // Process video update
        $videoName = $product->video;
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $videoPath = 'products/videos/' . $videoName;
            Storage::disk('public')->putFileAs('products/videos', $video, $videoName);
    
            // Delete old video if it exists
            if ($product->video) {
                Storage::disk('public')->delete('products/videos/' . $product->video);
            }
        }
    
        // Handle 'whatCanDoSection_image' update
        $whatCanDoSectionImage = $product->whatCanDoSection_image;
        if ($request->hasFile('whatCanDoSection_image')) {
            $file = $request->file('whatCanDoSection_image');
            $fileName = time() . '_whatCanDoSection.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('products/whatWeCanDoSection', $file, $fileName);
            $whatCanDoSectionImage = $fileName;
    
            // Delete old image if it exists
            if ($product->whatCanDoSection_image) {
                Storage::disk('public')->delete('products/whatWeCanDoSection/' . $product->whatCanDoSection_image);
            }
        }
    
        // Advantages formatting
        $adv_ar = $request->adv_ar ? json_encode(array_map('trim', explode(',', $request->adv_ar))) : null;
        $adv_fr = $request->adv_fr ? json_encode(array_map('trim', explode(',', $request->adv_fr))) : null;
        $adv_en = $request->adv_en ? json_encode(array_map('trim', explode(',', $request->adv_en))) : null;
    
        // Handle product features update for each language (English, French, Arabic)
        $features_en = $request->product_features_en ? json_encode(array_map('trim', $request->product_features_en)) : null;
        $features_fr = $request->product_features_fr ? json_encode(array_map('trim', $request->product_features_fr)) : null;
        $features_ar = $request->product_features_ar ? json_encode(array_map('trim', $request->product_features_ar)) : null;
    
        // Update the product record
        $product->update(array_merge([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name_en),
            'adv_ar' => $adv_ar,
            'adv_fr' => $adv_fr,
            'adv_en' => $adv_en,
            'product_features_en' => $features_en,
            'product_features_fr' => $features_fr,
            'product_features_ar' => $features_ar,
            'whatCanDoSection_ar' => $request->whatCanDoSection_ar,
            'whatCanDoSection_fr' => $request->whatCanDoSection_fr,
            'whatCanDoSection_en' => $request->whatCanDoSection_en,
            'whatCanDoSection_image' => $whatCanDoSectionImage,
        ], $updatedImages));
    
        // Handle dynamic tables and columns update
        if ($request->has('tables')) {
            $currentTables = $product->tables->pluck('id')->toArray(); // Get current tables linked to the product
            $updatedTables = [];
    
            foreach ($request->tables as $tableData) {
                // Update or create dynamic table
                $dynamicTable = DynamiqueTable::updateOrCreate(
                    ['id' => $tableData['id'] ?? null, 'product_id' => $product->id],
                    [
                        'name_fr' => $tableData['name_fr'],
                        'name_en' => $tableData['name_en'],
                        'name_ar' => $tableData['name_ar']
                    ]
                );
    
                // Add to the updated table list
                $updatedTables[] = $dynamicTable->id;
    
                // Update or create columns for this dynamic table
                foreach ($tableData['columns'] as $columnData) {
                    $columnRecord = Column::updateOrCreate(
                        ['id' => $columnData['id'] ?? null, 'table_id' => $dynamicTable->id],
                        [
                            'name_ar' => $columnData['name_ar'],
                            'name_fr' => $columnData['name_fr'],
                            'name_en' => $columnData['name_en']
                        ]
                    );
    
                    // Update values for each column
                    $valuesCount = max(count($columnData['values_en']), count($columnData['values_fr']), count($columnData['values_ar']));
                    for ($i = 0; $i < $valuesCount; $i++) {
                        ColumnValue::updateOrCreate(
                            ['column_id' => $columnRecord->id, 'value_en' => $columnData['values_en'][$i] ?? null],
                            [
                                'value_fr' => $columnData['values_fr'][$i] ?? null,
                                'value_ar' => $columnData['values_ar'][$i] ?? null
                            ]
                        );
                    }
                }
            }

        // Delete tables that are no longer in the request
        $tablesToDelete = array_diff($currentTables, $updatedTables);
        if ($tablesToDelete) {
            DynamiqueTable::destroy($tablesToDelete); // Delete the tables no longer linked to this product
        }
    }

        return response()->json([
            'redirect' => url('admin/products/'),
            'message' => 'Produit modifié avec succès'
        ]);
    }

    public function delete(Product $product){
        // Start a transaction to ensure all operations are performed atomically
        DB::beginTransaction();
    
        try {
            // Delete images associated with the product
            $imagePaths = [
                'products/' . $product->image,
                'products/' . $product->image2,
                'products/' . $product->image3,
                'products/' . $product->image4,
                'products/' . $product->image5,
                'products/' . $product->image6,
                'products/whatWeCanDoSection/' . $product->whatCanDoSection_image,
            ];
    
            // Delete images from storage if they exist
            foreach ($imagePaths as $path) {
                if (Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
    
            // Delete the video if it exists
            if ($product->video && Storage::disk('public')->exists('products/videos/' . $product->video)) {
                Storage::disk('public')->delete('products/videos/' . $product->video);
            }
    
            // Delete dynamic tables and their associated columns/column values
            foreach ($product->tables as $dynamicTable) {
                // Delete columns and their associated values
                foreach ($dynamicTable->columns as $column) {
                    $column->columnValues()->delete();  // Delete all column values for the column
                    $column->delete();  // Delete the column itself
                }
                $dynamicTable->delete();  // Delete the dynamic table
            }
    
            // Finally, delete the product itself
            $product->delete();
    
            // Commit the transaction if everything was successful
            DB::commit();
    
            // Redirect back with success message
            return back()->with('success', 'Produit supprimé avec succès');
        } catch (\Exception $e) {
            // Rollback the transaction if something fails
            DB::rollback();

            return back()->with('error', 'Une erreur s\'est produite lors de la suppression du produit');
        }
    }
}
