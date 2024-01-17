<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{protected $table = 'users';
    protected $fillable = ['id','username','Email','password','address','phone','img','age','Role','access_toke','Chronic_Disease','is_admin','gender','created_at', 'updated_at'];
    public function doctor()
    {
        return $this->hasOne('App\Doctor');
    }
    public function Secretary()
    {
        return $this->hasOne('App\Secretaries');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
