<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table='appointments';
    protected $fillable = ['id','user_id','doctor_id','patient_id','date_id','Reservation number','Price','created_at','updated_at'];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function report()
    {
        return $this->hasOne('App\Report');
    }
    public function medical_analysis()
    {
        return $this->belongsToMany('App\Medical_analysis','analsis_results');
    }
}
