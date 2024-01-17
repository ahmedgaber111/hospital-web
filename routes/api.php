<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// department list
Route::get('department/show','ApiController@department');
// density doctors
Route::get('doctor/density','ApiController@density_doctor');
// Dermatology doctors
Route::get('doctor/Dermatology','ApiController@Dermatology_doctor');
// Cardology and Vasclar doctors
Route::get('doctor/Cardology_VasclarDisease','ApiController@Cardology_VasclarDisease_doctor');
// Neurology doctors
Route::get('doctor/Neurology','ApiController@Neurology_doctor');
// Psychiatry doctors
Route::get('doctor/Psychiatry','ApiController@Psychiatry_doctor');
// Orthopedics doctors
Route::get('doctor/Orthopedics','ApiController@Orthopedics_doctor');
// Audiology doctor
Route::get('doctor/Audiology','ApiController@Audiology_doctor');
// Gynaecology doctors
Route::get('doctor/Gynaecology','ApiController@Gynaecology_doctor');
// Pediatrics and Neonatology doctors
Route::get('doctor/Pediatrics_Neonatology','ApiController@Pediatrics_Neonatology_doctor');

//report
Route::post('report/show','ApiController@medical_analsis_report');
Route::post('report/result','ApiController@medical_analsis_result');

//login
Route::post('user/login','ApiController@login');
//register
Route::post('user/register','ApiController@register');
//register
Route::post('doctor/book','ApiController@book');

///////////
//prescription
Route::post('prescription/show','ApiController@prescription');
Route::post('prescription/details','ApiController@prescription_details');

Route::post('doctor/appointment','ApiController@doctor_appointment');

Route::post('cancel/appointment','ApiController@cancel_appointment');
