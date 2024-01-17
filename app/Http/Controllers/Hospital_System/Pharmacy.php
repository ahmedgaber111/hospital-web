<?php

namespace App\Http\Controllers\Hospital_System;

use App\Http\Controllers\Controller;
use App\Medicine;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Pharmacy extends Controller
{

    public function PharmacyPage(){


 $user=Auth::user();
        $Medicines=Medicine::get();
return view('Pharmacy.Pharmacy',compact("Medicines",'user'));
    }public function AddMedicinesPage(){
 return view('Pharmacy.add');
}
public function AddMedicines(Request $request){
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
Medicine::create([
    'medicine_name'=>$request->medicine_name,
    'price'        =>$request->price,
    'quantity'     =>$request->quantity,
    'desc'         =>$request->desc,
    'type'          =>$request->type,
]);
    return redirect()->to('PharmacyPage');


    }


 public function CancelMedicine($Medicine_id){
     $quantity=Medicine::find($Medicine_id)->quantity;
     $UpdateMedicine=$quantity-1;

     Medicine::where('id', $Medicine_id)
             ->update([
             'quantity' => $UpdateMedicine
         ]);
     return redirect()->back();


}public function AddMedicineQuantity($Medicine_id){
    $quantity=Medicine::find($Medicine_id)->quantity;
    $UpdateMedicine=$quantity+1;

    Medicine::where('id', $Medicine_id)
        ->update([
            'quantity' => $UpdateMedicine
        ]);
    return redirect()->back();


}
}
