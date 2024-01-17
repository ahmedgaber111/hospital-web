<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view("Admin.admin_home");
});
////////////////////// register and login//////////////////////////
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');
Route::get('/home', 'Auth\AuthController@home')->name('home');
/////////////////// functions in Secretary page//////////////////
Route::get('secretary',"Hospital_System\Secretary@Secretary")
    ->name('Secretary.Page')->middleware("auth");
Route::get('New_Patients',"Hospital_System\Secretary@New_Patients")
    ->name('New_Patients')->middleware("auth");
Route::post('CreateNewPatients',"Hospital_System\Secretary@CreateNewPatients")
    ->name('CreateNewPatients')->middleware("auth");
Route::get('DoctorShift',"Hospital_System\Secretary@DoctorShift")
    ->name('DoctorShift')->middleware("auth");
Route::get('Reservation_Page/{doctor_user_id}',"Hospital_System\Secretary@ReservationPage")
    ->name('Reservation_Page')->middleware("auth");
Route::post('create_reservation',"Hospital_System\Secretary@CreateNewReservation")
    ->name('create_reservation')->middleware("auth");
Route::get('View_Page/{Patient_id}',"Hospital_System\Secretary@View_Page")
    ->name('View.Page')->middleware("auth");
Route::get('ADDTIME/{doctor_user_id}',"Hospital_System\Secretary@ADDTIME")
    ->name('Add_new_time')->middleware("auth");
Route::post('CreateAddTime',"Hospital_System\Secretary@CreateAddTime")
    ->name('CreateAddTime')->middleware("auth");
Route::get('Edit_existing_time/{dates_id}',"Hospital_System\Secretary@Edit_existing_time")
    ->name("Edit.existing.time")->middleware("auth");
Route::post('EDit_Time_To_Doctor',"Hospital_System\Secretary@EDit_Time_To_Doctor")
    ->name('EDit Time To Doctor')->middleware("auth");
Route::get("delete_ReservationPage/{Patient_id}","Hospital_System\Secretary@deleteReservationPage")
    ->name("delete_ReservationPage")->middleware("auth");
Route::get('deleteReservation/{Patient_id}',"Hospital_System\Secretary@deleteReservation")
    ->name("delete.Reservation")->middleware("auth");
Route::get('appointment/{Patient_id}',"Hospital_System\Secretary@showTime")
    ->name('show.Time')->middleware("auth");
Route::get('viewAppointment_not_done/{Patient_id}',"Hospital_System\Secretary@viewAppointment_not_done")
    ->name('Time')->middleware("auth");




Route::get('update.appointment/{Patient_id}',"Hospital_System\Secretary@updateAppointment")
    ->name("update.appointment")->middleware("auth");


Route::get('viewDone',"Hospital_System\Secretary@Appointment_done")
    ->name('Appointment_done')->middleware("auth");


///////////// DoctorPage and function /////////////////

Route::get('DoctorPage',"Hospital_System\Doctor@DoctorPage")
    ->name('DoctorPage')->middleware("auth");

Route::get('Doctor/{Patient_id}',"Hospital_System\Doctor@Doctor")
    ->name('doctor.Page')->middleware("auth");

Route::get('doctorShow',"Hospital_System\Doctor@DoctorShow")
    ->name('DoctorShow')->middleware("auth");

Route::get('DoctorClose',"Hospital_System\Doctor@DoctorClose")
    ->name('Doctor.close')->middleware("auth");



Route::post('CreateReport',"Hospital_System\Doctor@CreateReport")
    ->name('Doctor.CreateReport')->middleware("auth");


Route::get('RemoveReport/{ReportChecks_report_id}',"Hospital_System\Doctor@RemoveReport")
    ->name('Doctor.RemoveReport')->middleware("auth");




Route::get('Doctor_updateAppointment/{MedcineChecks_names}','Hospital_System\Doctor@Doctor_updateAppointment')
    ->name('Doctor.updateAppointment')->middleware("auth");



///////////////////// PharmacyPage and function //////////////////
Route::get('PharmacyPage','Hospital_System\Pharmacy@PharmacyPage')->name('PharmacyPage')->middleware("auth");
Route::get('AddMedicinesPage','Hospital_System\Pharmacy@AddMedicinesPage')->name('AddMedicinesPage')->middleware("auth");
Route::post('AddMedicines','Hospital_System\Pharmacy@AddMedicines')->name('AddMedicines')->middleware("auth");
Route::get('CancelMedicine/{Medicine_id}','Hospital_System\Pharmacy@CancelMedicine')->name('CancelMedicine')->middleware("auth");
Route::get('AddMedicineQuantity/{Medicine_id}','Hospital_System\Pharmacy@AddMedicineQuantity')->name('AddMedicineQuantity')->middleware("auth");



////////////////////////lab///////////////////
Route::get('LabPage','Hospital_System\LAB@LabPage')->name('LabPage')->middleware("auth");
Route::get('ADDAnalysis/{Analysis_id}','Hospital_System\LAB@ADDAnalysis')->name('ADDAnalysis')->middleware("auth");

Route::post('SaveAnalysisResult','Hospital_System\LAB@SaveAnalysisResult')->name('SaveAnalysisResult')->middleware("auth");
Route::get('deleteAnalysis/{Analysis_id}','Hospital_System\LAB@deleteAnalysis')->name('deleteAnalysis')->middleware("auth");

Route::post('LabPage','Hospital_System\LAB@Send')->name('Send')->middleware("auth");

