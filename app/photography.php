<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photography extends Model
{
    
 public static function getphotographyProduct()
 {
   return photography::all();
 }
   
 public function getProduct()
 {
   return $this->hasOne('App\photography_product','id','product_id');
 }
 public function category()
 {
     return $this->hasOne('App\category','entity_id','category_id');
 }

 public static function update_photography_status($productid,$status)
 {
  $data=array('status'=>$status);
  return photography::where('product_id','=',$productid)->update($data);
 }
  public static function getUpdatestatusdone($productid)
  {
      $data=array('next_department_status'=>'0');
      return photography::where('product_id','=',$productid)->update($data);
  }
  public static function getUpdatenextdepartmentdone($productid)
  {
      $data=array('next_department_status'=>'1');
      return photography::where('product_id','=',$productid)->update($data);
  }
  
}
