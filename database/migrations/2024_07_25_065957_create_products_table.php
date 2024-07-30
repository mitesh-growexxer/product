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
            $table->string('name' , 180);
            $table->longText('description')->nullable();
            $table->date('purchase_date');
            $table->double('product_price');
            $table->enum('type' , [ config('constants.PRODUCT_TYPE')  ,  config('constants.SERVICE_TYPE') ] )->default(config('constants.PRODUCT_TYPE') );
            $table->longText('industry')->nullable();
            $table->timestamps();
            $table->softdeletes();
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
