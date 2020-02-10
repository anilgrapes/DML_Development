<?php

namespace App;
use App\psd;
use App\productListModel;
use DB;

use Illuminate\Database\Eloquent\Model;

class EditingModel extends Model
{

 public static function getEditingProduct()
    {
        return psd::all();
     }
    public function category()
    {
        return $this->hasOne('App\category','entity_id','category_id');
    }
   
   
 public function getProduct()
 {
   return $this->hasOne('App\photography_product','id','product_id');
 }
 public static function getUpdatestatusdone($productid)
 {
     $data=array('next_department_status'=>'1');
     return psd::where('product_id','=',$productid)->update($data);
 }
public static function update_editing_status($productid,$status)
{
    $data=array('status'=>$status);
    return EditingModel::where('product_id','=',$productid)->update($data);
}
}
