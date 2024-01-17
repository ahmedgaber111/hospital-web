<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaries extends Model
{
    protected $table='secretaries' ;
    protected$fillable=['id','user_id','created_at','updated_at'] ;


    public function doctor()
    {
        return $this->hasMany('App\Doctor','Secretary_id','id');
    }

    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
