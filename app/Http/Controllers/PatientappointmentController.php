<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientappointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $appointment = DB::select("select a.id, a.name, a.age, a.gender, a.problem, d.doctor_name, a.created_at from patient_appointment a, doctorlist d where d.id=a.doctor_id order by a.id");
            return view("pages.patientappointment.index", ["appointments"=>$appointment]);
        }catch(\Exception $e){
            die("Data Connection Failed". $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctorlist = DB::select("select id, doctor_name from doctorlist");
        return view("pages.patientappointment.create_patient", ["doctorlists"=>$doctorlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into patient_appointment(name, age, gender, problem, doctor_id, created_at)values('$request->txtName', '$request->txtAge', '$request->txtGender', '$request->txtProblem', '$request->cmbDoctor', now())");
        return redirect("appointments");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = DB::select("select id, doctor_name from doctorlist");
        $appointment=DB::select("select a.id, a.name, a.age, a.gender, a.problem, d.doctor_name, a.created_at from patient_appointment a, doctorlist d where d.id=a.doctor_id order by a.id");
        return view("pages.patientappointment.edit", ["appointments"=>$appointment[0], "doctors"=>$doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update("update patient_appointment set name='$request->txtName', age='$request->txtAge', gender='$request->txtGender', problem='$request->txtProblem', doctor_id='$request->cmbDoctor' where id='$id'");
        return redirect("appointments");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from patient_appointment where id='$id'");
        return redirect('appointments');
    }
}
