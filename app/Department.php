<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{  protected$table='departments' ;

    protected$fillable=['id','name','created_at','updated_at'] ;

    public function doctor()
    {
        return $this->hasMany('App\Doctor');
    }
    public function clinic()
    {
        return $this->hasMany('App\Clinic');
    }
}
