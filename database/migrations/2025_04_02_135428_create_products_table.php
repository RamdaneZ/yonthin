<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name_en');
            $table->string('name_fr');
            $table->string('name_ar');
            $table->longText('description_en')->nullable();
            $table->longText('description_fr')->nullable();
            $table->longText('description_ar')->nullable();
            $table->json('adv_en')->nullable();
            $table->json('adv_fr')->nullable();
            $table->json('adv_ar')->nullable();
            $table->json('product_features_en')->nullable();
            $table->json('product_features_fr')->nullable();
            $table->json('product_features_ar')->nullable();
            $table->string('image');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('video')->nullable();
            $table->longText('whatCanDoSection_en')->nullable();
            $table->longText('whatCanDoSection_fr')->nullable();
            $table->longText('whatCanDoSection_ar')->nullable();
            $table->string('whatCanDoSection_image')->nullable();
            $table->string('slug');
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
