<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\PhotoshopHelper;
use App\photography;
use App\psd;
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
      $psdpending=PhotoshopHelper::get_psd_pending_list();
        return view('Photoshop/PSD/psd_pending',compact('psdpending'));
    }
    /*
    Get done List 
    this list come from psd  done option
    */
    public function get_psd_done_list()
    {
        $status='3';
        $psd_done_list=PhotoshopHelper::get_psd_status_list($status);
        return view('Photoshop/PSD/psd_done',compact('psd_done_list'));
    }
      /*
    Get rework List 
    this list come from psd  rework option
    */
    public function get_psd_rework_list()
    {
        $status='4';
        $psd_rework=PhotoshopHelper::get_psd_status_list($status);
        return view('Photoshop/PSD/psd_rework',compact('psd_rework'));
    }
    /* Get All Data from ppending From psd Department
    Submit Pending Data into post method
    */

    public function get_data_from_psd_pending_list(Request $request)
    {
        if($request->input('status') !='2')
        {
            $psd=new psd();
            $psd->product_id=$request->input('product_id');
            $psd->category_id=$request->input('category_id');
            $psd->status=$request->input('status');
            $psd->current_status='1';
            $psd->next_department_status='0';
            $psd->save();
            $photoshopid=photography::find($request->input('photoshopid'));
            $photoshopid->next_department_status='1';
            $photoshopid->save();
           return redirect()->back()->with('success', 'Psd status Change Successfull');

        }
        else{
          return redirect()->back()->with('success', 'Psd status Change Successfull');
        }
       
    }

    public function submit_done_list(Request $request)
    {
        $psd=psd::find($request->input('id'));
       if($request->input('status') !='0')
       {
        $psd->status=$request->input('status');
        $psd->save();
        return redirect()->back()->with('success', 'Psd status Change Successfull');
       }
       else{

        return redirect()->back()->with('success', 'Psd status Change Successfull');
       }
    }

}
