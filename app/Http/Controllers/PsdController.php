<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PsdController extends Controller
{
    /*
    Psd Dashboard 
    */
    public function index()
    {
        return view('Photoshop/PSD/index');
    }
    /*
    Get Pending List 
    this list come from photography done option
    */
    public function get_psd_pending_list()
    {
        DB::setTablePrefix('');
        $psdpending=DB::table('dml_photographies as p')
                ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
                ->join('category as c','e.attribute_set_id','=','c.entity_id')
                ->join('photosraphy_status as st','p.status','=','st.entity_id')
                
                ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
                ->where('p.next_department_status','=',0)
                ->where('p.status','=',3)
                ->get();
        DB::setTablePrefix('dml_');
        return view('Photoshop/PSD/psd_pending',compact('psdpending'));
    }
    /*
    Get done List 
    this list come from psd  done option
    */
    public function get_psd_done_list()
    {
        return view('Photoshop/PSD/psd_done');
    }
      /*
    Get rework List 
    this list come from psd  rework option
    */
    public function get_psd_rework_list()
    {
        return view('Photoshop/PSD/psd_rework');
    }
}
