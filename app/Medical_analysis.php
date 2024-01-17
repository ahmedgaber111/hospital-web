<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_analysis extends Model
{
    protected$table='medical_analysis' ;

    protected$fillable=['id','name','created_at','updated_at'] ;

    public function appointment()
    {
        return $this->belongsToMany('App\Appointment','analsis_results');
    }
}
