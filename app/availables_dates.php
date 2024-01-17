<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class availables_dates extends Model
{
    protected $table='availables_dates';
    protected $fillable = ['id','doctor_id','date_id','created_at','updated_at'];

}
