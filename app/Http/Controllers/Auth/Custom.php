<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom extends Controller
{
    public function Secretary(){
    return view('Hospital_System.Secretary');//, compact('Patients'));
}

}
