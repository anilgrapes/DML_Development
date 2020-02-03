<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photography extends Model
{
    
  public function getProduct()
  {
    return $this->hasOne('App\productListModel','entity_id','product_id');
  }
   
}
