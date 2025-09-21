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
        Schema::create('product_out_items', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('product_out_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('qty');
            $table->decimal('unit_price', 10, 2)->nullable(); 
            $table->decimal('total_price', 10, 2)->nullable();
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('product_out_id')->references('id')->on('product_outs')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            
            // Indexes
            $table->index(['product_out_id']);
            $table->index(['product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_out_items');
    }
};
