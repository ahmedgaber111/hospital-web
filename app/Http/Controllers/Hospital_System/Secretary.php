<?php


namespace App\Http\Controllers\Hospital_System;

use App\Appointment;
use App\availables_dates;
use App\Date;
use App\Department;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Secretaries;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PhpParser\Comment\Doc;
use function GuzzleHttp\Promise\all;

class Secretary extends Controller
{
    public function Secretary()
    {

        $doctors= DB::table('users')
             ->join('doctors','users.id','=','user_id')
              ->join('secretaries',function ($join){
    $join->on('secretaries.id','=','doctors.Secretary_id')
    ->where('secretaries.user_id',Auth::user()->id);
  })->get();
        $patient= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',2);
            })->paginate(1);


        $Patients= DB::table('users')
             ->join('patients','users.id','=','user_id')
             ->join('appointments',function ($join){
                 $join->on('appointments.patient_id','=','patients.id')
                     ->where('appointments.is_done',0);
             })->get();

        return view('Secretary.Secretary',compact("Patients",'doctors','patient'));

    }
    public function Done()

    {

        $doctors= DB::table('users')
            ->join('doctors','users.id','=','user_id')
            ->join('secretaries',function ($join){
                $join->on('secretaries.id','=','doctors.Secretary_id')
                    ->where('secretaries.user_id',Auth::user()->id);
            })->get();
        $patient= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',2);
            })->get();


        $Patients= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',0);
            })->get();

        return view('Secretary.Secretary',compact("Patients",'doctors','patient'));

    }
    public function updateAppointment($Patient_id){
        Appointment::where('id', $Patient_id)
        ->update([
            'is_done' => 1
        ]);
return redirect()->back();
}
    public function DoctorShift(){

        $availables_dates= DB::table('availables_dates')
            ->join('doctors','availables_dates.doctor_id','=','doctors.id')
            ->join('users','doctors.user_id','=','users.id')->get();

          $doctors=DB::table('secretaries')->where('secretaries.user_id',Auth::user()->id)
          ->join('doctors','secretaries.id','=','doctors.Secretary_id')
           ->join('users','doctors.user_id','=','users.id')
           ->get();


            DB::table('users')
            ->join('doctors','users.id','=','doctors.user_id')
            ->join('secretaries',function ($join){
                $join->on('doctors.Secretary_id','=','secretaries.id')
                    ->where('secretaries.user_id',Auth::user()->id);
            })->get();
        $Patients = DB::table('users')
            ->join('patients', 'users.id', '=','user_id')
            ->get();
$dates= DB::table("dates")
    ->join('availables_dates','dates.id','=','availables_dates.date_id')
    ->join('doctors','availables_dates.doctor_id','=','doctors.id')
    ->join('secretaries',function ($join) {
        $join->on('doctors.Secretary_id', '=', 'secretaries.id')
            ->where('secretaries.user_id', Auth::user()->id);
    }) ->get();

        return view('Secretary.Doctors',compact('doctors','dates','availables_dates'));
    }
    public function Add_new_time(){

        return view('Secretary.AddTime');
    }
    public function ADDTIME($doctors){

        return view('Secretary.AddTime',compact('doctors'));
    }
    public function Edit_existing_time($id){
   session_start();
   $_SESSION['user_id']=$id;
        $OldDateFromS=DB::table('dates')
        ->join('availables_dates','dates.id','=','availables_dates.date_id')
        ->join('doctors','availables_dates.doctor_id','=','doctors.id')
        ->join('users',function ($join) {
            $join->on('doctors.user_id', '=', 'users.id')
                ->where('doctors.user_id',$_SESSION['user_id']);
        }) ->get();
session_unset();
                $availables_dates= DB::table('availables_dates')
            ->join('doctors','availables_dates.doctor_id','=','doctors.id')
            ->join('users','doctors.user_id','=','users.id')->get();
        return view('Secretary.EditTime',compact('OldDateFromS','availables_dates'));

    }
    public function EDit_Time_To_Doctor(Request $request){

        $dateEdit=Date::find($request->date_id);
        Date::create([

            'day'=>$request->day,
            'from'=>$request->From,
            'to'=>$request->To,


        ]);
        $id= DB::table('dates')
            ->where('day', '=',$request->day)
            ->where('from', '=',$request->From)
            ->where('to', '=',$request->To)
            ->value('id');
availables_dates::where('date_id',$request->date_id)->update([
    "date_id"=>$id
]);
        return redirect()->back();
    }
    public function CreateAddTime(Request $request){
        $validator=Validator::make($request->all(),[
            'day'                       => 'required',
            'ftime'                      => 'required',
            'ttime'                     => 'required',
        ],[
            'day.required'                =>'day is required',
            'ftime.required'              =>'from is required',
            'time.required'          =>'to is required',
        ]);
        If($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        Date::create([
            'day'    =>  $request->day,
            'from'   =>$request->ftime,
            'to'     =>$request->ttime,

        ]);

        $id= DB::table('dates')
            ->where('day', '=',$request->day)
            ->where('from', '=',$request->ftime)
            ->where('to', '=',$request->ttime)
            ->value('id');
        availables_dates::create([
            "date_id"=>$id,
            "doctor_id"=>$request->id
        ]);

        return redirect()->back()->with(['success'=>'date is added']);

    }
    public function New_Patients()
    {
        return view("Secretary.NewPatient");
    }
    public function CreateNewPatients(Request $request)
    {

        $validator=Validator::make($request->all(),[
            'id'                         => 'required|numeric|unique:users',
            'username'                   => 'required|string|max:255',
            'Email'                      => 'required|string|email|max:255|unique:users',
            'password'                   => 'required|string|min:8|confirmed',
            'password_confirmation'      => 'required',
            'phone'                      => 'required|min:11|numeric',
            'age'                        => 'required|numeric',
            'gender'                     => 'required|string',
            'address'                    => 'required|string|max:255',
        ],
            [
                'id.required'                    => 'id must be required',
                'id.numeric'                     => 'id must be  numeric',
                'id.unique'                      => 'id must be  unique',
                'username.required'              => 'username must be required ',
                'username.string'                => 'username  must be',
                'Email.required'                 => 'Email must be required',
                'Email.string'                   => 'Email  must be string',
                'Email.email'                    => 'Email must be Email',
                'Email.unique'                   => 'Email  must be unique',
                'password.required'              => 'password must be required',
                'password.string'                => 'password must be  string',
                'password.min:8'                 => 'password must be minimum 8',
                'password_confirmation.required' => 'password_confirmation required',
                'phone.required'                 => 'phone must be required',
                'phone.min:11'                   => 'phone must be minimum 11',
                'phone.numeric'                  => 'phone must be  numeric',
                'age.required'                   => 'age  must be required',
                'age.numeric'                    => 'age must be numeric',
                'gender.required'                => 'gender must be required',
                'gender.string'                  => 'gender must be string',
                'password.unique'                    =>'password is unique',
                'age'                                => 'required|numeric',
                'phone.unique'                       =>'phone is unique',
                'address.required'                   =>'address is required',
                'address.string'                     =>'address is string',
        ]);
        If($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
          User::create([
            'id'       => $request->id,
            'username' => $request->username,
            'Email'    => $request->Email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
            'age'      => $request->age,
            'gender'   => $request->gender,
            'Role'     =>'Patient',
            'address'  => $request->address,
        ]);
        Patient::create([
            'user_id'   =>$request->id
        ]);
        return redirect()->back()->with(['success'=>'patient is registered']);

    }
    public function ReservationPage($doctor){
        $doctor=User::find($doctor)->id;
         $doctors=Doctor::where('user_id',User::find($doctor)->id)->get();
session_start();
 $_SESSION['id']=$doctor;
           $availables_dates= DB::table('availables_dates')
       ->join('doctors','availables_dates.doctor_id','=','doctors.id')
            ->join('users',function ($join){
                $join->on('doctors.user_id','=','users.id')
                    ->where('users.id', $_SESSION['id']);
            })->get();

        $datesfrom=DB::table('dates')
            ->join('availables_dates','dates.id','=','date_id')
            ->join('doctors','availables_dates.doctor_id','=','doctors.id')
             ->join('secretaries',function ($join){
              $join->on('secretaries.id','=','doctors.Secretary_id')
            ->where('secretaries.user_id',Auth::user()->id);
    })->get();
        $datesto=DB::table('dates')
            ->join('availables_dates','dates.id','=','date_id')
            ->join('doctors','availables_dates.doctor_id','=','doctors.id')
            ->join('secretaries',function ($join){
                $join->on('secretaries.id','=','doctors.Secretary_id')
                    ->where('secretaries.user_id',Auth::user()->id);
            })->get();
        $datesday=DB::table('dates')
            ->join('availables_dates','dates.id','=','date_id')
            ->join('doctors','availables_dates.doctor_id','=','doctors.id')
            ->join('secretaries',function ($join){
                $join->on('secretaries.id','=','doctors.Secretary_id')
                    ->where('secretaries.user_id',Auth::user()->id);
            })->get();

       $departments=Department::select('id','name')->get();
        return view('Secretary.NewReserve',
            compact('availables_dates','departments','doctors','datesfrom','datesday'));
    }
    public function CreateNewReservation(Request $request){
        $validator=Validator::make($request->all(),[
            'id'                         =>  'required',
            'username'                    =>  'required',
            'patient_id'                 =>  'required',
        ],[
            'id.required'              =>' required',
            'ftime.required'              =>'required',
            'time.required'              =>' required',
            'day.required'                =>' required',
            'username.required'              =>' required',
            'patient_id.required'              =>' required',

        ]);
        If($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        Appointment::create([
            'user_id'               =>Auth::user()->id,
            'doctor_id'             =>$request->id,
            'patient_id'            =>$request->patient_id,
            'date_id'               =>$request->date_id	,
            'Price'                 =>$request->price

        ]);
        return redirect()->back()->with(['success'=>'patient is registered']);


    }
    public function deleteReservationPage($Patient_id){

        return view('Secretary.CancelReservation',compact('Patient_id'));

    }
    public function deleteReservation($Patient_id){
        Appointment::where('id',$Patient_id)->delete();
        return redirect()->back()->with(['success'=>'APPOINTMENT IS CANCELED']);
    }
    public function View_Page($Patientid){
   $Patient=User::find($Patientid);
        return view('Secretary.view',compact('Patient'));
    }
    public function Appointment_done(){
        $patient= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',2);
            })->get();
        $Patients= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',0);
            })->get();

        $doctors= DB::table('users')
            ->join('doctors','users.id','=','user_id')
            ->join('secretaries',function ($join){
                $join->on('secretaries.id','=','doctors.Secretary_id')
                    ->where('secretaries.user_id',Auth::user()->id);
            })->get();

        return view('Secretary.Secretary',compact('Patients','doctors','patient'));

    }
    public function showTime($Patient_id){
          Appointment::find($Patient_id)->patient_id;
          Patient::find(Appointment::find($Patient_id)->patient_id)->user_id;
          $patient=User::find( Patient::find(Appointment::find($Patient_id)->patient_id)->user_id);
          $date= Appointment::find($Patient_id)->date_id;
          $dates=Date::find($date);

        return view('Secretary.viewDone',compact('dates','patient'));
    }
    public function viewAppointment_not_done($Patient_id){
         Appointment::find($Patient_id)->patient_id;
         Patient::find(Appointment::find($Patient_id)->patient_id)->user_id;
            $patient=User::find( Patient::find(Appointment::find($Patient_id)->patient_id)->user_id);
        $date= Appointment::find($Patient_id)->date_id;
           $dates=Date::find($date);

        return view('Secretary.viewAppointment_not_done',compact('dates','patient'));
    }

}
