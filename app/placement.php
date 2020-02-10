<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\psd;
class placement extends Model
{
    
  public function getPsdDoneList()
  {
    return $this->belongsTo('App\psd');
  }
  public function getProduct()
  {
    return $this->hasOne('App\photography_product','id','product_id');
  }
 public function category()
 {
     return $this->hasOne('App\category','entity_id','category_id');
 }
 public static function update_placement_status($productid,$status)
 {
  $data=array('status'=>$status);
  return placement::where('product_id','=',$productid)->update($data);
 }
 public static function getUpdatestatusdone($productid)
  {
      $data=array('next_department_status'=>'1');
     
      return psd::where('product_id','=',$productid)->update($data);
  }

}
