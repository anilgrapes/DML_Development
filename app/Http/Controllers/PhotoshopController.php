<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use DB;
class PhotoshopController extends Controller
{
    public function index()
    {
        DB::setTablePrefix('');
        $totoalproduct=DB::table('Catalog_product_flat_1 as e')->count();
        $totalphotographydone=DB::table('Catalog_product_flat_1 as e')
                    ->where('dml_only','=',0)
                    ->count();
                    $totalphotographypending=DB::table('Catalog_product_flat_1 as e')
                    ->where('dml_only','=',1)
                    ->count();
        DB::setTablePrefix('dml_');
        return view('Photoshop/Photography/index',compact('totoalproduct','totalphotographydone','totalphotographypending'));
    }

    /*
    Photography pending get data from this function
    */
    public function get_pending_list()
    {
      DB::setTablePrefix('');
      $pendinglist=DB::table('Catalog_product_flat_1 as e')
                    ->join('category as c','e.attribute_set_id','=','c.entity_id')
                   // ->join('dml_photographies as p','p.product_id','!=','e.entity_id')
                    ->select('e.entity_id','e.sku','c.name','e.attribute_set_id')
                    ->where('dml_only','=',1)
                    ->get();

       $totalproduct=$pendinglist->count();              
       DB::setTablePrefix('dml_');
     return view('Photoshop/Photography/photography_pending',compact('pendinglist','totalproduct'));
    }
     /*
    Photography done get data from this function
    */
    public function get_done_list()
    {
        DB::setTablePrefix('');
        $donelist=DB::table('dml_photographies as p')
                ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
                ->join('category as c','e.attribute_set_id','=','c.entity_id')
                ->join('photosraphy_status as st','p.status','=','st.entity_id')
                
                ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
                ->where('p.next_department_status','=',0)
                ->where('p.status','=',3)
                ->get();
        DB::setTablePrefix('dml_');
      return view('Photoshop/Photography/photography_done',compact('donelist'));
    }
     /*
    Photography Rework get data from this function
    */
    public function get_rework_list()
    {
        DB::setTablePrefix('');
        $reworklist=DB::table('dml_photographies as p')
                ->join('Catalog_product_flat_1 as e','p.product_id','=','e.entity_id')
                ->join('category as c','e.attribute_set_id','=','c.entity_id')
                ->join('photosraphy_status as st','p.status','=','st.entity_id')
                ->select('p.id','e.entity_id','e.sku','p.id','e.attribute_set_id','c.name','st.name as status_name')
                ->where('p.next_department_status','=',0)
                ->where('p.status','=',4)
                ->get();
        DB::setTablePrefix('dml_');
        return view('Photoshop/Photography/photography_rework',compact('reworklist'));
    }

    /*
    photography pending submit button action
    get all detail from photography pending list 

    */

    public function pending_list_submit(Request $request)
    {

        $photoshop=new photography();
        if($request->input('status') !="1")
        {
            $photoshop->product_id=$request->input('product_id');
            $photoshop->category_id=$request->input('category_id');
            $photoshop->status=$request->input('status');
            $photoshop->current_status='1';
            $photoshop->next_department_status='0';
            $photoshop->save();
        }
        
        return  redirect('Photoshop/Photography/pending')->with('message','Photoshop Status Change Successfull');
    }
/*
done list submit for particular product change the photography status
done to rework 
*/
    public function submit_done_list(Request $request)
    {
        if($request->input('status') !='0')
        {
            $photoshop=photography::find($request->get('id'));
            $photoshop->status=$request->input('status');
            $photoshop->save();
            
            return redirect()->back()->with('success', 'Photography status Change Successfull');
        }
        else{
            return redirect()->back()->with('success', 'Select the photography status');
        }
  
        
        
    }
}
