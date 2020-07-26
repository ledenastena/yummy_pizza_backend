<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id')->comment('Table primary key');
            $table->string('name', 255)->comment('Product type name');
            $table->timestamps();
        });
        
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->comment('Table primary key');
            $table->integer('product_type_id')->unsigned()->index('product_type_id')->comment('Id of the type of the product');
            $table->string('name', 255)->comment('Product name');
            $table->string('image_url', 255)->comment('Path to the product image');
            $table->text('description')->comment('Product description');
            $table->decimal('price_eur', 5, 2)->comment('Product price in euros');
            $table->decimal('price_usd', 5, 2)->comment('Product price in dollars');
            $table->timestamps();

            $table->foreign('product_type_id')->references('id')->on('product_types');
        });

        Schema::create('shipping_rates', function (Blueprint $table) {
            $table->increments('id')->comment('Table primary key');
            $table->string('name', 255)->comment('Shipping rate name');
            $table->decimal('amount_eur', 5, 2)->comment('Shipping amount in euros');
            $table->decimal('amount_usd', 5, 2)->comment('Shipping amount in dollars');
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
        Schema::dropIfExists('product_types');
        Schema::dropIfExists('products');
        Schema::dropIfExists('shipping_rates');
    }
}
