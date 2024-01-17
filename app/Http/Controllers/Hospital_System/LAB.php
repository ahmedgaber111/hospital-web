<?php


namespace App\Http\Controllers\Hospital_System;

use App\Analysis_result;
use App\Appointment;
use App\availables_dates;
use App\Date;
use App\Department;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Medical_analysis;
use App\Patient;
use App\Secretaries;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Comment\Doc;

class LAB extends Controller
{
    public function LabPage(){
        $appointment=Appointment::where('is_done',2)->get();
        $Analysis=Medical_analysis::get();
        $Analysiss=Medical_analysis::get();
        return view('lab.lab',compact('Analysis','Analysiss','appointment')) ;
    }
    public function SaveAnalysisResult(Request $request){
//         $file_extension =$request->photo->GetClientOriginalExtension();
//         $file_name =time().'.'.$file_extension;
//         $path='app/public/images';
//         $request->photo->move($path,$file_name);
//       $Analysis_result=Analysis_result::create([
//     'appointment_id'      =>$request->appointment_id,
//     'img'                 =>$file_name,
//     'medical_analysis_id' =>$request->medical_analysis_id,
// ]);


        $validator=Validator::make($request->all(),[
            'medicine_name'                   => 'required|string',
            'quantity'                        => 'required|numeric',
            'price'                            => 'required|numeric',
            'type'                              => 'required|string',
            'desc'                         => 'required|string',




        ],
            [
                'medicine_name.required'              => 'required ',
                'medicine_name.string'              => 'not string ',
                'quantity.required'                 => 'required',
                'quantity.numeric'                  => 'not numeric',
                'price.required'                   => 'required',
                'price.numeric'                    => 'not numeric',
                'type.required'              => 'required ',
                'type.string'              => 'not string ',
                'desc.required'              => 'required ',
                'desc.string'              => 'not string ',


            ]);
        If($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        Analysis_result::create([
            'medicine_name'=>$request->medicine_name,
            'price'        =>$request->price,
            'quantity'     =>$request->quantity,
            'desc'         =>$request->desc,
            'type'          =>$request->type,
        ]);
        return redirect()->to('PharmacyPage');


    }
    public function ADDAnalysis($Analysis_id){

        return Medical_analysis::find($Analysis_id);
}
     public function deleteAnalysis($Analysis_id){
      Medical_analysis::where('id',$Analysis_id)->delete();
     return redirect()->to('LabPage');

    }
    public function Send(Request $request){
        $file_extension =$request->photo->GetClientOriginalExtension();
        $file_name =time().'.'.$file_extension;
        $path='images';
        $request->photo->move($path,$file_name);
        Analysis_result::where('appointment_id',$request->Appointment_ID)->update([
            'img'                 =>'images/'.$file_name,
        ]);
        Appointment::where('is_done',2)->update([
            "is_done"=>3
        ]);

  return redirect()->to('LabPage');
}
}
