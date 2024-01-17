<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected$table='doctors' ;

    protected$fillable=['id','user_id','Secretary_id',"department_id"] ;
    protected $hidden=['pivot'];
    public function Secretary()
    {
        return $this->belongsTo('App\User','Secretary_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
    public function date()
    {
        return $this->belongsToMany('App\Date','availables_dates');
    }
    public function Secretaries()
    {
        return $this->belongsTo('App\Secretaries','Secretary_id');
    }

}
