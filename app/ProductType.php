<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function product() {
        return $this->hasOne('App\Product');
    }

    public function products() {
        return $this->hasMany('App\Product', 'id', 'product_type_id');
    }
}
