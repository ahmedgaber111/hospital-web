<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DefineRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Role = Auth::user()->Role;
        if ($Role == 'Secretary') {
            return redirect()->route('Secretary.Page');
        }
        if ($Role == 'Doctor') {
            return redirect()->route('DoctorPage');
        }
        if ($Role == 'Pharmacist') {
            return redirect()->route('PharmacyPage');
        }
        if ($Role == 'Analysis doctor') {
            return redirect()->route('LabPage');
        }




return redirect()->back();
    }
}
