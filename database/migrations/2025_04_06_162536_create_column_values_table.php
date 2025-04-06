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
        Schema::create('column_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('column_id'); // Foreign key to 'columns'
            $table->string('value_en');
            $table->string('value_fr');
            $table->string('value_ar');
            $table->timestamps();

            $table->foreign('column_id')->references('id')->on('columns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('column_values');
    }
};
