<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function productType() {
        return $this->belongsTo('App\ProductType', 'product_type_id', 'id');
    }
}
