<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App;
use App\productListModel;
use Auth;
use Config;
use DateTime;
use Illuminate\Support\Carbon;
class PhotoshopHelper
{
//get All Pending product having not image is done

public static function  getAllProduct()
{
  
    DB::setTablePrefix('');
   
    $pendinglist=DB::table('Catalog_product_flat_1 as e')
                    ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
                    ->select('e.entity_id','e.sku','e.metal_quality_value','e.original_sku','c.name','e.attribute_set_id')
                    ->groupBy('e.original_sku')
                    ->groupBy('e.metal_quality_value')
                    ->where('dml_only','=',1)
                    ->get();
  
                  
       DB::setTablePrefix('dml_');
      
      
       return $pendinglist;
}
//Photography  List Rework and done list Data
public static function getPhotography_status($status)
{
    DB::setTablePrefix('');
    $donelist=DB::table('dml_photographies as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
           // ->where('p.next_department_status','=',0)
            ->where('p.status','=',$status)
            ->get();
    DB::setTablePrefix('dml_');
    return $donelist;
}
//Get The Data from photography done and pending in psd Department
public static function get_psd_pending_list()
{
    DB::setTablePrefix('');
    $psdpending=DB::table('dml_photographies as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',3)
            ->get();
    DB::setTablePrefix('dml_');
    return $psdpending;
}
//Get The Data from psd done and pending in psd Department
public static function get_psd_status_list($status)
{
    DB::setTablePrefix('');
    $psdstatus=DB::table('dml_psds as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',$status)
            ->get();
    DB::setTablePrefix('dml_');
    return $psdstatus;
}

//Get The Data from psd done and pending in Editing Department
public static function get_editing_pending_list()
{
    DB::setTablePrefix('');
    $psdpending=DB::table('dml_psds as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',3)
            ->get();
    DB::setTablePrefix('dml_');
    return $psdpending;
}
//Get The Data from psd done and Done and Rework in Editing Department
public static function get_editing_status_list($status)
{
    DB::setTablePrefix('');
    $psdstatus=DB::table('dml_editing_models as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',$status)
            ->get();
    DB::setTablePrefix('dml_');
    return $psdstatus;
}

public static function get_jped_pending_list()
{
    DB::setTablePrefix('');
    $jpegpending=DB::table('dml_editing_models as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',3)
            ->get();
    DB::setTablePrefix('dml_');
    return $jpegpending;
}
//Get The Data from Editing done and Done and Rework in JPEG Department
public static function get_jpeg_status_list($status)
{
    DB::setTablePrefix('');
    $psdstatus=DB::table('dml_jpeg_models as p')
            ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
            ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
            ->join('photosraphy_status as st','p.status','=','st.entity_id')
            ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
            ->where('p.next_department_status','=',0)
            ->where('p.status','=',$status)
            ->get();
    DB::setTablePrefix('dml_');
    return $psdstatus;
}
//Get the Status From SELECT * from photosraphy_status
public static function getStatus($id)
{
    DB::setTablePrefix('');
    $status=DB::table('photosraphy_status')
            ->where('entity_id','=',$id)
            ->get();
            DB::setTablePrefix('dml_');
   return $status;
}
//Get department from url 
public static function getDepartment($url)
{
    $url=explode('Photoshop/',$url);
    $depart=explode('/',$url[1]);
    return $depart[0];
}
//Get Product Deatail from Catalog_product_flat_1 using enity_id
public static function get_Product_detail($entity_id)
{
    DB::setTablePrefix('');
    $product=DB::table('Catalog_product_flat_1 as e')
                    
                    ->where('e.entity_id','=',$entity_id)
                    ->get();
    
      return $product;              
}
public static function getCurentTimeDate()
{
 return $current_date_time = Carbon::now()->toDateTimeString();
}

public static function get_status($name)
{
    $status=DB::table('photoshop_status_types')
            ->where('status_name','=',$name)
            ->get();
            return $status;
}
public static function store_cache_table_data($array)
{
    $user=Auth::user();
    $productid=$array['product_id'];
    $data=array();
    //Get the Product Detail from product table 
    $product=PhotoshopHelper::get_Product_detail($productid);

   //Get Status like pending or rework or done
   $status_dep= PhotoshopHelper::getStatus($array['status']);
   $now = date('Y-m-d');
   $from = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 5, date('Y')));
    //Get Department name
    $departmnet=PhotoshopHelper::getDepartment($array['url']);
   
   
    $photomode="";
    foreach($status_dep as $dep)
    {
        $photomode=strtoupper($departmnet)."_".strtoupper($dep->name);
    }
     //Get Status from Department Status
  
    $status=PhotoshopHelper::get_status($photomode);
    $statusid="";
    foreach($status as $s)
    {
        $statusid=$s->status_id;
    }
  
   foreach($product as $p)
   {
       $sku=$p->sku;
       $color1=explode(' ',$sku);

       $data=[
           'product_id'=>$p->entity_id,
           'product_sku'=> $color1[0],
           'color'=> $color1[2]." ".$color1[3],
           'clearity'=>$color1[1],
           'action_name'=>$statusid,
           'action_by'=>$user->id,
           'action_date_time'=>PhotoshopHelper::getCurentTimeDate()
          
       ];
   }
    
   $valid=PhotoshopHelper::validation_check_cache_table($data);
   $update=array();
   if($valid!=1)
   {
       
        PhotoshopHelper::addintoCasheTable($data);
  
    }else{
    $check=PhotoshopHelper::get_existed_data_in_cache_table($data);
    foreach($check as $check1)
    {
        $update[]=$check1->action_name;
       
    }
  $col=$color1[2]." ".$color1[3];

  PhotoshopHelper::get_update_action_name($update,$statusid,$color1[0],$col);
   }
  
    
      
}

//check product Existed in cache table 
public static function validation_check_cache_table($data)
{
    $array=array(
        'product_sku'=>$data['product_sku'],
        'color'=>$data['color']
    );
    $validation=DB::table('photoshop_caches')
                ->where($array)
                ->exists();
      return $validation;          

}
//First tim e insert into cache table 
public static function addintoCasheTable($data)
{
    $data=DB::table('photoshop_caches')
                ->insert($data);

}
//GEt the Data from cache table 
public static function get_existed_data_in_cache_table($data)
{
    
    $array=array(
        'product_sku'=>$data['product_sku'],
        'color'=>$data['color']
    );
    $validation=DB::table('photoshop_caches')
                ->where($array)
                ->get();
  return $validation;            
}
//update the action name for
public static function get_update_action_name($array,$status,$sku,$col)
{
   $action_name=array();
  $mar=array(
      'action_name'=>$status
  );
   
    $action_name=array_merge($array,$mar);
    $List = implode(', ', $action_name);
    DB::table('photoshop_caches')
        ->where('product_sku', $sku)
        ->where('color',$col)
        ->update(array('action_name'=>$List));
}
}   
?>