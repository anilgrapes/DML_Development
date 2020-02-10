<?php

namespace App;
use App\EditngModel;
use Illuminate\Database\Eloquent\Model;

class psd extends Model
{
 public static function getPsdProduct()
{
      return psd::all();
}
public function getProduct()
 {
   return $this->hasOne('App\photography_product','id','product_id');
 }
 public function category()
 {
     return $this->hasOne('App\category','entity_id','category_id');
 }
 public static function update_psd_status($productid,$status)
 {
  $data=array('status'=>$status);
  return psd::where('product_id','=',$productid)->update($data);
  }
}
