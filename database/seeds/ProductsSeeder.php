<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => 'Pizza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('product_types')->insert([
            'name' => 'Drink',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('product_types')->insert([
            'name' => 'Dessert',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        /* product inserts */

        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Margarita',
            'image_url' => 'margarita.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 5.4,
            'price_usd' => 4.64,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Megaroni',
            'image_url' => 'megaroni.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 6,
            'price_usd' => 5.16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Hawaiian pizza',
            'image_url' => 'hawaiian_pizza.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 8.2,
            'price_usd' => 7.05,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Curry chicken pizza',
            'image_url' => 'curry_chicken_pizza.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 7.6,
            'price_usd' => 6.54,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Bacon and BBQ pizza',
            'image_url' => 'bacon_bbq_pizza.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 10.99,
            'price_usd' => 9.45,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Capricciosa',
            'image_url' => 'capricciosa.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 8,
            'price_usd' => 6.88,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Venezia',
            'image_url' => 'venezia.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 7.8,
            'price_usd' => 6.7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Mexico',
            'image_url' => 'mexico.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 6.5,
            'price_usd' => 5.59,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Tuna fish pizza',
            'image_url' => 'tuna_fish_pizza.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 9.99,
            'price_usd' => 8.59,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 1,
            'name' => 'Calabrese',
            'image_url' => 'calabrese.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 5.8,
            'price_usd' => 4.98,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 2,
            'name' => 'Cola',
            'image_url' => 'cola.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 3,
            'price_usd' => 2.58,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 2,
            'name' => 'Orange soda',
            'image_url' => 'orange_soda.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 3,
            'price_usd' => 2.58,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 2,
            'name' => 'Lemonade',
            'image_url' => 'lemonade.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 3,
            'price_usd' => 2.58,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 3,
            'name' => 'Ice cream',
            'image_url' => 'ice_cream.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 4.5,
            'price_usd' => 3.87,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 3,
            'name' => 'Cake',
            'image_url' => 'cake.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 5,
            'price_usd' => 4.3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('products')->insert([
            'product_type_id' => 3,
            'name' => 'Pudding',
            'image_url' => 'pudding.png',
            'description' => 'Praesent sit amet eros odio. Donec arcu metus, aliquam nec accumsan eget, tristique bibendum eros. Aenean id dui quam. Morbi ullamcorper mauris ac lectus rhoncus fringilla. Vestibulum nec nunc turpis. Sed iaculis ligula eu nisl interdum, sed porta purus congue. Morbi venenatis pulvinar lorem.',
            'price_eur' => 3.5,
            'price_usd' => 3.01,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        /* Shipping table */

        DB::table('shipping_rates')->insert([
            'name' => 'Standard rate',
            'amount_eur' => 5,
            'amount_usd' => 4.3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
