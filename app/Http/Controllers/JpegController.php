<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JpegController extends Controller
{
   //get all Pending list of JPEG Department

   public function get_pending_list_jpeg()
   {

      return view('Photoshop/JPEG/jpeg_pending');
   }
//get all done list of JPEG Department

   public function get_done_list_jpeg()
   {
       return view('Photoshop/JPEG/jpeg_done');

   }
   //get all Rework list of JPEG Department
   public function get_rework_list_jpeg()
   {
       return view('Photoshop/JPEG/jpeg_rework');
   }
}
