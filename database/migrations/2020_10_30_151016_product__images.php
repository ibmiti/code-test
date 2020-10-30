<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
      Schema::create('Product_Images', function (Blueprint $table)  
      {
        $table->increments('id');
        $table->unsignedInteger('product_id');
        $table->string('product_image')->default('productdefault.jpg');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->unsignedInteger('product_id');
        $table->string('product_image')->default('productdefault.jpg');
        $table->timestamps();
    }
}
