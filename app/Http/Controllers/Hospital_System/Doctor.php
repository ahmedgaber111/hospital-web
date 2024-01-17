<?php

namespace App\Http\Controllers\Hospital_System;

use App\Analysis_result;
use App\Appointment;
use App\Http\Controllers\Controller;
use App\Medical_analysis;
use App\Medicine;
use App\Report;
use App\Report_Medicine;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Helper\Table;

class Doctor extends Controller
{
    public function Doctor_updateAppointment($MedcineChecks){
        $id= DB::table('doctors')
            ->where('user_id', '=',Auth::user()->id)
            ->value('id');
        $appointmentid=DB::table('appointments')
            ->where('doctor_id', '=',$id)
            ->where('is_done', '=',1)
            ->value('id');

Analysis_result::create([
    "medical_analysis_id"=>$MedcineChecks,
    'appointment_id' =>$appointmentid
]);
  Appointment::where('is_done',1)
    ->update([
        'is_done' => 2
    ]);
        $Medicines=Medicine::select('id','medicine_name')->get();
        return view('Doctor.Doctors',compact('Medicines'));
    }


    public function DoctorPage(){
        $id= DB::table('doctors')
            ->where('user_id', '=',Auth::user()->id)
            ->value('id');
        $appointmentid=DB::table('appointments')
            ->where('doctor_id', '=',$id)
            ->where('is_done', '=',1)
            ->value('id');

        $Medicines=Medicine::select('id','medicine_name')->get();
       $Reports=Report::get();
    return view('Doctor.Doctors',compact('Medicines','Reports','appointmentid'));
    }
    public function doctorShow()
    {
   
  /*      $report =DB::table('analsis_results')
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

*/
        $patients= DB::table('users')
            ->join('patients','users.id','=','user_id')
            ->join('appointments',function ($join){
                $join->on('appointments.patient_id','=','patients.id')
                    ->where('appointments.is_done',1);
            })
              ->join('doctors',        function ($join){
                  $join->on('appointments.doctor_id','=','doctors.id')
                      ->where('doctors.user_id',Auth::user()->id);
              })
              ->get();


           return view('Doctor.patient details',compact('patients'));

 //  };
        $Medicines=Medicine::select('id','medicine_name')->get();
        $Reports=Report::get();

        return view('Doctor.Doctors',compact('Medicines','Reports'));

}
    public function DoctorClose(){
        return redirect()->to('DoctorPage');}

public function CreateReport(Request $request){

    $validator=Validator::make($request->all(),[
        'medicine_id'              => 'required',
        'intake_interval'          => 'required|numeric',
        'dosage'                   => 'required|string',
        'Start_Take'               => 'required',
        'End_Take'                 => 'required',
    ],[
            'medicine_id.required'           => 'MedicineID must be required ',
           'intake_interval.required'       => 'intake_interval must be required ',
            'intake_interval.numeric'        => 'intake_interval must be  numeric',
            'dosage.required'                => 'dosage must be required ',
            'dosage.string'                  =>'dosage  must be  String',
            'Start_Take.required'            => 'Start_Take must be required ',
            'End_Take.required'              => 'dosage must be required ',
        ]);
    If($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->all());
    }
    if($request->name==null && $request->names==null)
       {
          return redirect()->back();
      }
    if($request->name!=null && ($request->names)!=null){
        return redirect()->back();

    }
    if($request->name !=null) {
        $id= DB::table('doctors')
            ->where('user_id', '=',Auth::user()->id)
            ->value('id');
        $appointmentid=DB::table('appointments')
            ->where('doctor_id', '=',$id)
            ->where('is_done', '=',1)
            ->value('id');

            $r = Report::create([
                "medicine_id"     => $request->medicine_id,
                "appointment_id"  =>$request->report_id,
            ]);
        $names= Medicine::with('reportmedicine')->where('id','=',$request->medicine_id)->select('medicine_name')->get();
        $MedcineChecks= Medical_analysis::create([
            'name' => $request->name
        ]);
        $ReportChecks =Report_Medicine::create([
            "report_id"       => $r->id,
            "medicine_id"     => $request->medicine_id,
            "intake_interval" => $request->intake_interval,
            "medicine_type"   => $request->medicine_type,
            "dosage"          => $request->dosage,
            "Start_Take"      => $request->Start_Take,
            "End_Take"        => $request->End_Take
        ]);
        $Medicines=Medicine::select('id','medicine_name')->get();
        $Reports=Report::get();
        $MedcineChecksname=$MedcineChecks->name;
        return view('Doctor.Doctors',compact('Medicines','names','MedcineChecksname','MedcineChecks','ReportChecks','Reports','ReportChecks','appointmentid'));

    }
    if($request->names !=null) {
        $id= DB::table('doctors')
            ->where('user_id', '=',Auth::user()->id)
            ->value('id');
        $appointmentid=DB::table('appointments')
            ->where('doctor_id', '=',$id)
            ->where('is_done', '=',1)
            ->value('id');


    $r = Report::create([
            "medicine_id"     => $request->medicine_id,
            "appointment_id"  =>$request->report_id,
        ]);
        $names= Medicine::with('reportmedicine')->where('id','=',$request->medicine_id)->select('medicine_name')->get();
        $MedcineChecks= Medical_analysis::create([
            'name' => $request->names
        ]);
        $MedcineChecksname=$MedcineChecks->name;

        $ReportChecks =Report_Medicine::create([
            "report_id"       => $r->id,
            "medicine_id"     => $request->medicine_id,
            "intake_interval" => $request->intake_interval,
            "medicine_type"   => $request->medicine_type,
            "dosage"          => $request->dosage,
            "Start_Take"      => $request->Start_Take,
            "End_Take"        => $request->End_Take
        ]);

        $Medicines=Medicine::select('id','medicine_name')->get();
        $Reports=Report::get();
        return view('Doctor.Doctors',compact('Medicines','names','MedcineChecksname','MedcineChecks','ReportChecks','Reports','ReportChecks','appointmentid'));





    }
}
    public function RemoveReport($reportid){
        Report_Medicine::where("report_id",$reportid)->delete();

        return redirect()->to('DoctorPage');
    }


    public function RemoveMedicalAnalysis($Medical_id){

    }



}
