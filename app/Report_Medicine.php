<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_Medicine extends Model
{   protected$table='report_medicine' ;
    protected$fillable=['id',"report_id",'medicine_id','intake_interval','medicine_type','dosage','Start_Take','End_Take','created_at','updated_at'] ;

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
    public function medicine()
    {
        return $this->hasMany('App\Medicine','report_medicine');
    }
}
