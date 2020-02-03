<?php

namespace App\Http\Controllers;
use App\Helpers\PhotoshopHelper;
use Illuminate\Http\Request;
use App\EditingModel;
use App\psd;

class EditingController extends Controller
{
    //get all Pending list of Editing Department

    public function get_pending_list_editing()
    {
       $editing_pending_list=PhotoshopHelper::get_editing_pending_list();
      return view('Photoshop/Editing/editing_pending',compact('editing_pending_list'));
    }
   //get all done list of Editing Department

    public function get_done_list_editng()
    {
       
      
       $status='3';
      $editing_done =PhotoshopHelper::get_editing_status_list($status);
       return view('Photoshop/Editing/editing_done',compact('editing_done'));

    }
    public function get_rework_list_editing()
    {
        $status='4';
         $editing_rework =PhotoshopHelper::get_editing_status_list($status);
       return view('Photoshop/Editing/editing_rework',compact('editing_rework'));
    }

    public function get_pending_submit_editing(Request $request)
    {
        $editing=new EditingModel();
        $psd=new psd();
        $editing->product_id=$request->input('product_id');
        $editing->category_id=$request->input('category_id');
        $editing->status=$request->input('status');
        $editing->current_status='1';
         $psd=psd::find($request->input('id'));
        $editing->next_department_status='0';
        if($request->input('status') !='2')
        {
            $message=array(
                'success'=>'Editing Done Change Successfull',
                'class'=>'alert alert-success',
            );
            $psd->next_department_status='1';
            $psd->save();
            $editing->save();
           
        }else{
          
            $message=array(
                'success'=>'Editing Done Change Successfull',
                'class'=>'alert alert-danger',
            );
          
        }
     
        return redirect()->back()->with($message);
    }

    public function submit_done_list_editng(Request $request)
    {
        $editing=EditingModel::find($request->input('id'));
    if($request->input('status') !='0')
    {
        $editing->status=$request->input('status');
        $editing->save();
        $message=array(
            'success'=>'Editing Status Change Successfull',
            'class'=>'alert alert-success',
        );
        
    }
    else{
        $message=array(
            'success'=>'select Editing Done Change ',
            'class'=>'alert alert-danger',
        );
    }
    return redirect()->back()->with($message);   
    }
}
