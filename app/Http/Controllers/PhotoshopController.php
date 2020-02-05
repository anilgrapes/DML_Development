<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use App\productListModel;
use App\Helpers\PhotoshopHelper;
use DB;
use Auth;
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
       
        $pending=PhotoshopHelper::getAllProduct();
        $pendinglist=collect($pending);
       // dd($pendinglist->pluck('sku','metal_quality_value'));
        $totalproduct=$pending->count();
      return view('Photoshop/Photography/photography_pending',compact('pendinglist','totalproduct'));

   
   
  
      
    }
     /*
    Photography done get data from this function
    */
    public function get_done_list()
    {
   $status='3';
   $donelist=PhotoshopHelper::getPhotography_status($status);
   return view('Photoshop/Photography/photography_done',compact('donelist'));
    }
     /*
    Photography Rework get data from this function
    */
    public function get_rework_list()
    {
     
        $status='4';
        $reworklist=PhotoshopHelper::getPhotography_status($status);
      
        return view('Photoshop/Photography/photography_rework',compact('reworklist'));
    }

    /*
    photography pending submit button action
    get all detail from photography pending list 

    */

    public function pending_list_submit(Request $request)
    {
        $user=Auth::user();
        
        $photoshop=new photography();
     
       
        if($request->input('status') !="1")
        {
            

            $photoshop->product_id=$request->input('product_id');
            $photoshop->category_id=$request->input('category_id');
            $photoshop->status=$request->input('status');
            $photoshop->current_status='1';
            $photoshop->next_department_status='0';
           $photoshop->save();
           //Cache table data Insert
           $cache=array(
            'product_id'=>$request->input('product_id'),
            'url'=>$request->url(),
            'status'=>$request->input('status')

        );
          PhotoshopHelper::store_cache_table_data($cache);
           //End Cache table data Insert
        }
      
        
     return  redirect('Photoshop/Photography/pending')->with('message','Photoshop Status Change Successfull');
    }
/*
done list submit for particular product change the photography status
done to rework 
*/
    public function submit_done_list(Request $request)
    {
        
        $user=Auth::user();
        if($request->input('status') !='0')
        {
            //cache table data insert 
            $cache=array(
                'product_id'=>$request->input('product_id'),
                'url'=>$request->url(),
                'status'=>$request->input('status')
    
            );
            PhotoshopHelper::store_cache_table_data($cache);
            //End of cache table data insert 
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
