<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{   protected$table='reports' ;
    protected$fillable=['id','prescription','appointment_id',"medicine_id",'created_at','updated_at'] ;

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
    public function medicine()
    {
        return $this->belongsToMany('App\Medicine','report_medicine');
    }
}
