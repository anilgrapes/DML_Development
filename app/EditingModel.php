<?php

namespace App;
use App\psd;
use App\productListModel;
use DB;
use Illuminate\Database\Eloquent\Model;

class EditingModel extends Model
{

    public function getCatetegroy()
    {
        return $this->belongsTo('App\category','category_id','entity_id');
    }

   

}
