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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('subtitle_ar')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('subtitle_fr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->string('btnText_ar')->nullable();
            $table->string('btnText_fr')->nullable();
            $table->string('btnText_en')->nullable();
            $table->longText('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
