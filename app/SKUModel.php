<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKUModel extends Model
{
    //
    protected $table='product_sku';
    protected $fillable=['skuno','productid','category'];    
}
