<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable =['id', 'user_id', 'created_at', 'updated_at'];

public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
