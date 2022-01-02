<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_content');
            $table->text('product_desc');
            $table->integer('product_price');
            $table->string('product_image');
            $table->integer('product_status');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->text('product_slug');
            $table->text('product_tags');
            $table->integer('product_sold');
            $table->integer('product_quantity');
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
        Schema::dropIfExists('products');
    }
}
