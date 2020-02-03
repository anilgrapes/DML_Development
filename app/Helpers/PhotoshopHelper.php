<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App;
use App\productListModel;
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
//Get Product Deatail from Catalog_product_flat_1 using enity_id
public static function get_Product_detail($entity_id)
{
    DB::setTablePrefix('');
    $product=DB::table('Catalog_product_flat_1 as e')
                    ->join('dml_categories as c','e.attribute_set_id','=','c.entity_id')
                   ->select('e.entity_id','e.sku','c.name','e.attribute_set_id')
                    ->groupBy(['e.original_sku'])
                    ->where('entity_id','=',$entity_id)
                    ->get();

      return $product;              
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
}
?>