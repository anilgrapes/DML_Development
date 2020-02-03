<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\PhotoshopHelper;
use App\JpegModel;
use App\EditingModel; 
class JpegController extends Controller
{
   //get all Pending list of JPEG Department

   public function get_pending_list_jpeg()
   {
      $pending_list=PhotoshopHelper::get_editing_status_list('3');
     return view('Photoshop/JPEG/jpeg_pending',compact('pending_list'));
   }
//get all done list of JPEG Department

   public function get_done_list_jpeg()
   {
      $status='3';
      $done_jpg_list=PhotoshopHelper::get_jpeg_status_list($status);
       return view('Photoshop/JPEG/jpeg_done',compact('done_jpg_list'));

   }
   //get all Rework list of JPEG Department
   public function get_rework_list_jpeg()
   {
      $status='4';
      $rework_jpg_list=PhotoshopHelper::get_jpeg_status_list($status);
    
       return view('Photoshop/JPEG/jpeg_rework',compact('rework_jpg_list'));
   }

   public function submit_pending_list_jpeg(Request $request)
   {
      $jpeg=new JpegModel();
      $editing=new EditingModel();
      $jpeg->product_id=$request->input('product_id');
      $jpeg->category_id=$request->input('category_id');
      $jpeg->status=$request->input('status');
      $jpeg->current_status='0';
      $jpeg->next_department_status='0';
      $st=EditingModel::find($request->input('id'));
      $st->next_department_status='1';
      if($request->input('status') !='1')
      {
         $jpeg->save();
         $st->save();
         $message=array(
            'success'=>'Editing Done Change Successfull',
            'class'=>'alert alert-success',
        );
      }
      else{
         $message=array(
            'success'=>'Editing Done Change Successfull',
            'class'=>'alert alert-danger',
        );
      }
      return redirect()->back()->with($message);
      
   }

   public function submit_done_list_jpeg(Request $request)
   {
     
      $jpeg=JpegModel::find($request->input('id'));

      if($request->input('status') !='0')
      {
         $jpeg->status=$request->input('status');
         $jpeg->save();
         $message=array(
            'success'=>'Jpeg Done Change Successfull',
            'class'=>'alert alert-success',
        );
      }
      else{
         $message=array(
            'success'=>'Jpeg Select Status',
            'class'=>'alert alert-danger',
        );
      }
      return redirect()->back()->with($message);
   }
}
