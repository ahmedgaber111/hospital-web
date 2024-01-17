<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analysis_result extends Model
{
    protected $table='analsis_results';
    protected $fillable = ['id','appointment_id','medical_analysis_id','img','created_at','updated_at'];

}
