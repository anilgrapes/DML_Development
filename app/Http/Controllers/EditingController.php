<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditingController extends Controller
{
    //get all Pending list of Editing Department

    public function get_pending_list_editing()
    {

       return view('Photoshop/Editing/editing_pending');
    }
//get all done list of Editing Department

    public function get_done_list_editng()
    {
        return view('Photoshop/Editing/editing_done');

    }
    public function get_rework_list_editing()
    {
        return view('Photoshop/Editing/editing_rework');
    }
}
