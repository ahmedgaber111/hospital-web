<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{   protected $table='dates';
    protected $fillable = ['id','day','from','to','created_at','updated_at'];
    protected $hidden=['created_at','updated_at','pivot'];

    public function doctor()
    {
        return $this->belongsToMany('App\Doctor','availables_dates');
    }
}
