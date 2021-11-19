<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DoctorlistController;
use App\Http\Controllers\PatientprescriptionController;
use App\Http\Controllers\PatientappointmentController;
use App\Http\Controllers\PrescriptiondetailsController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdmitpatientvisitController;
use App\Http\Controllers\PatienttestController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PatientmedicineController;
use App\Http\Controllers\BeddetailsController;

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
    return view('layout.login');
});

Route::get('/blank', function () {
    return view('pages.blank');
});

Route::get('/dashboard', function () {
    $user_id = session('sess_id');
    if(!isset($user_id)){
        return redirect('/');
    }
    return view('pages.dashboard');
})->middleware('login');

Route::get('/contactus', function () {
    return view('pages.contactus');
});

Route::get("logout", [LoginController::class, "logout"]);
Route::post("login", [LoginController::class, "login"]);

//Route::resource('students', StudentController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('doctors', DoctorlistController::class);
Route::resource('prescriptions', PatientprescriptionController::class);
Route::resource('appointments', PatientappointmentController::class);
Route::resource('prescriptiondetails', PrescriptiondetailsController::class);
Route::resource('admissions', AdmissionController::class);
Route::resource('patientvisits', AdmitpatientvisitController::class);
Route::resource('testpatients', PatienttestController::class);
Route::resource('tests', TestController::class);
Route::resource('medicines', PatientmedicineController::class);
Route::resource('beds', BeddetailsController::class);

// Invocie
Route::get('invoice/', 'InvoiceController@index'); 
Route::post('invoice/store', 'InvoiceController@store'); 
Route::post('invoice/addItem', 'InvoiceController@addItem'); 
Route::delete('invoice/removeItem', 'InvoiceController@removeItem');


