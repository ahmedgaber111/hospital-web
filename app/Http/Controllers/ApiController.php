<?php

namespace App\Http\Controllers;
use App\Department;
use App\Doctor;
use App\Appointment;
use App\User;
use App\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ApiController extends Controller
{
    function department(){
        $department = Department::select('name','img')->get();
        return response()->json($department);
    }
//  density doctor
    function density_doctor(){
        $doctors =DB::table('users')
        ->join('doctors', function ($join) {
            $join->on('users.id', '=', 'doctors.user_id');})
        ->join('departments', function ($join) {
            $join->on('departments.id', '=', 'doctors.department_id');}
            )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','availables_dates.doctor_id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',1)
    ->get();
        return response()->json($doctors);
    }

//  Ear_Nose doctor
function Ear_Nose_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',2)
    ->get();
    return response()->json($doctors);
}

//  Dermatology doctor
function Dermatology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',3)
    ->get();
    return response()->json($doctors);
}

//  Cardology and Vasclar Disease doctor
function Cardology_VasclarDisease_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',4)
    ->get();
    return response()->json($doctors);
}

//  Neurology doctor
function Neurology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',5)
    ->get();
    return response()->json($doctors);
}

//  Psychiatry doctor
function Psychiatry_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',6)
    ->get();
    return response()->json($doctors);
}

//  Orthopedics doctor
function Orthopedics_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',7)
    ->get();
    return response()->json($doctors);
}

//  Audiology doctor
function Audiology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')      
    ->where('departments.id', '=',8)
    ->get();
    return response()->json($doctors);
}

//  Gynaecology doctor
function Gynaecology_doctor(){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',9)
    ->get();
    return response()->json($doctors);
}

//  Pediatrics and Neonatology doctor
function Pediatrics_Neonatology_doctor (){
    $doctors =DB::table('users')
    ->join('doctors', function ($join) {
        $join->on('users.id', '=', 'doctors.user_id');})
    ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'doctors.department_id');}
        )
        ->join('availables_dates', function ($join) {
            $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
            )
            ->join('dates', function ($join) {
                $join->on('availables_dates.date_id', '=', 'dates.id');}
                )
        
    ->select('users.username', 'users.img', 'users.phone','departments.name','doctors.id','dates.from','dates.to','dates.id')
    ->where('departments.id', '=',10)
    ->get();
    return response()->json($doctors);
}


    /*function doctor($id){
        
        $doctors = DB::table('users')
        ->join('doctors', function ($join) {
            $join->on('users.id', '=', 'doctors.user_id');})
        ->join('departments', function ($join) {
            $join->on('departments.id', '=', 'doctors.department_id');}
            )
        ->select('users.username', 'users.img', 'users.phone','departments.name')
        ->where('departments.id', '=',$id)
        ->get();
        return response()->json($doctors);
    }
    */

    //register
    function register(Request $request){
        $username=$request->username;
        $email=$request->email;
        $password=$request->password;
        //
        $user=new User();
        $user->username=$username;
        $user->email=$email;
        $user->role="patient";
        $user->password=\Hash::make($password);
        $user->access_toke=\Str::random(64);
        $user->save();
       return  response()->json(['access_toke'=>$user->access_toke]);
    }

    //login
    function login(Request $request){
         //validation
        //auth
        $cred=array('email'=>$request->email,
                    'password'=>$request->password);
        //check 
        if(Auth::attempt($cred))
        {
            if(!isset(Auth::user()->access_toke)){
                Auth::user()->access_toke=\Str::random(64);
                Auth::user()->save();
            }
            /*
            $patient = DB::table('users')
            ->join('patients', function ($join) {
                $join->on('users.id', '=', 'patients.user_id');})
                ->select('patients.user_id','users.username', 'users.Email', 'users.phone',
                'users.phone','users.age','users.gender','users.img','users.address','patients.id')
                ->where('users.email', '=',$request->email)
        ->get();
        */
        //$patient = Patient::where('user_id','=',Auth::user()->id)->get();
        //$id = $patient->id ;
            return response()->json(['id'=>Auth::user()->id,
            'username'=>Auth::user()->username,
            'email'=>Auth::user()->Email,
            'phone'=>Auth::user()->phone,
            'age'=>Auth::user()->age,
            'gender'=>Auth::user()->gender,
            'img'=>Auth::user()->img,
            'address'=>Auth::user()->address,
            'patient_id'=>Auth::user()->patient->id
            
        ]);
        
           return response()->json($patient);
        }else{
            //
            return "not valid email or password";
        }
    }

    //book
    function book(Request $request){
        
        $doc_id=$request->doc_id;
        $user_id=$request->user_id;
        $patient_id=$request->patient_id;
        $date_id=$request->date_id;
        $price=$request->price;
        /*$user = DB::table('users')
        ->join('patients', function ($join) {
        $join->on('users.id', '=', 'patients.user_id');})
        ->select('patients.id','patients.user_id')
        ->where('users.access_toke', '=',$access_toke)
        ->get();
*/

       
        $appointment=new Appointment();
        $appointment->user_id=$user_id;
        $appointment->doctor_id=$doc_id;
        $appointment->patient_id=$patient_id;
        $appointment->date_id=$date_id;
        $appointment->price=$price;
        $appointment->is_done=0;
        $appointment->save();
        
        return response()->json($appointment);
   }


   function medical_analsis_report(Request $request){
        
    $user_id = $request->id;

    $report =DB::table('analsis_results')
    ->join('medical_analysis', function ($join) {
        $join->on('medical_analysis.id', '=', 'analsis_results.medical_analysis_id');})
    ->join('appointments', function ($join) {
        $join->on('appointments.id', '=', 'analsis_results.appointment_id');}
        )
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'appointments.user_id');}
            )
            
                
        
    ->select('users.username','medical_analysis.name', 'analsis_results.id','analsis_results.created_at')
    ->where('users.id', '=',$user_id)
    ->get();
    return response()->json($report);
}

function medical_analsis_result(Request $request){
        
    $report_id = $request->id;

    $report =DB::table('analsis_results')
    ->join('medical_analysis', function ($join) {
        $join->on('medical_analysis.id', '=', 'analsis_results.medical_analysis_id');})
    ->join('appointments', function ($join) {
        $join->on('appointments.id', '=', 'analsis_results.appointment_id');}
        )
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'appointments.user_id');}
            )
            
                
        
    ->select('users.username','medical_analysis.name', 'analsis_results.img')
    ->where('analsis_results.id', '=',$report_id)
    ->get();
    return response()->json($report);
}



/////////////////////
function prescription(Request $request){
        
    $patient_id = $request->id;

    $report =DB::table('reports')
    ->join('appointments', function ($join) {
        $join->on('reports.appointment_id', '=', 'appointments.id');})
    ->join('doctors', function ($join) {
        $join->on('appointments.doctor_id', '=', 'doctors.id');}
        )
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'doctors.user_id');}
            )
            ->join('availables_dates', function ($join) {
                $join->on('availables_dates.doctor_id', '=', 'doctors.id');}
                )   
                ->join('dates', function ($join) {
                    $join->on('availables_dates.date_id', '=', 'dates.id');}
                    )        
        
                    ->select('reports.id','users.username','reports.created_at')
    ->where('appointments.patient_id', '=',$patient_id)
    ->get();
    return response()->json($report);
}

function prescription_details(Request $request){
        
    $report_id = $request->id;

    $report =DB::table('medicines')
    ->join('report_medicine', function ($join) {
        $join->on('medicines.id', '=', 'report_medicine.medicine_id');})
    ->join('reports', function ($join) {
        $join->on('report_medicine.report_id', '=', 'reports.id');}
        )
        ->join('appointments', function ($join) {
            $join->on('appointments.id', '=', 'reports.appointment_id');}
            )
        ->join('analsis_results', function ($join) {
            $join->on('appointments.id', '=', 'analsis_results.appointment_id');}
            ) 
        ->join('medical_analysis', function ($join) {
            $join->on('analsis_results.medical_analysis_id', '=', 'medical_analysis.id');}
            ) 
    ->select('medicines.medicine_name','report_medicine.intake_interval', 'report_medicine.medicine_type','report_medicine.dosage','report_medicine.Start_Take','report_medicine.End_Take','medical_analysis.name')
    ->where('reports.id', '=',$report_id)
    ->get();
    return response()->json($report);
}
function doctor_appointment(Request $request){ 
    $user_id = $request->id; 
    $app =DB::table('doctors') 
    ->join('appointments', function ($join) { 
        $join->on('appointments.doctor_id', '=', 'doctors.id');}) 
    ->join('users', function ($join) { 
        $join->on('users.id', '=', 'appointments.user_id');} 
        ) 
        ->join('patients', function ($join) { 
            $join->on('patients.id', '=', 'appointments.patient_id');} 
            )   
    ->select('users.username','appointments.id') 
    ->where('patients.id', '=',$user_id) 
    ->get(); 
    return response()->json($app); 
} 
 
function cancel_appointment(Request $request){ 
    $app_id = $request->id; 
    $app =DB::table('appointments')->delete($app_id); 
 
    
    return null; 
}

}
