<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingRate extends Model
{
    protected $table = 'shipping_rates';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
