<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientprescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $prescription = DB::select("select p.id, a.name, p.prescription_date, d.doctor_name, p.admission_needed, p.fee from patient_prescription p, patient_appointment a, doctorlist d where a.id=p.patient_id and d.id=p.doctor_id order by p.id");
            return view("pages.patienprescription.index", ["prescriptions"=>$prescription]);
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
        $appointment = DB::select("select id, name from patient_appointment");
        return view("pages.patienprescription.create_prescription", ["doctorlists"=>$doctorlist, "appointments"=>$appointment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into patient_prescription (patient_id, prescription_date, doctor_id, admission_needed, fee) values ('$request->cmbPatient', '$request->txtDate', '$request->cmbDoctor', '$request->txtAdmission', '$request->txtDoctorfee')");
        return redirect("prescriptions");
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
        $prescript = DB::select("select id, name from patient_appointment");
        $prescription=DB::select("select p.id, a.name, p.prescription_date, d.doctor_name, p.admission_needed, p.fee from patient_prescription p, patient_appointment a, doctorlist d where a.id=p.patient_id and d.id=p.doctor_id order by p.id");
        return view("pages.patienprescription.edit", ["prescriptions"=>$prescription[0], "doctors"=>$doctor, "prescripts" =>$prescript]);
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
        DB::update("update patient_prescription set patient_id='$request->cmbPatient', prescription_date='$request->txtDate', doctor_id='$request->cmbDoctor', admission_needed='$request->txtAdmission', fee='$request->txtDoctorfee' where id='$id'");
        return redirect("prescriptions");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from patient_prescription where id='$id'");
        return redirect('prescriptions');
    }
}
