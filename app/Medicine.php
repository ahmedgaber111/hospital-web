<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    protected$table='medicines' ;
    protected$fillable=['id','medicine_name','price',"img",'quantity','type','desc','created_at','updated_at'] ;
    public function reportmedicine()
    {
        return $this->belongsTo('App\Report_Medicine','report_medicine');
    }
    public function report()
    {
        return $this->belongsToMany('App\Report','report_medicine');
    }
}
