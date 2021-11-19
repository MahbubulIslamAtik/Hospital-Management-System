<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $admit=DB::select("select a.id, a.admission, pa.name, a.bed, a.advance, d.doctor_name, a.bed_price, a.created_at from admissionpatient a, patient_appointment pa, doctorlist d where pa.id=a.patient_id and d.id=a.doctor_id order by a.id");
            return view("pages.admission.index", ["admits"=>$admit]);
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
        $doctorname = DB::select("select id, doctor_name from doctorlist");
        $patientname = DB::select("select id, name from patient_appointment");
        return view("pages.admission.create_admission", ["doctornames"=>$doctorname, "patientnames"=>$patientname]);
        redirect("admissions");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into admissionpatient(admission, patient_id, bed, advance, doctor_id, bed_price, created_at)values('$request->txtAdmission', '$request->cmbPatient', '$request->txtBed', '$request->txtAdvance', '$request->cmbDoctor', '$request->txtBedprice', now())");
        return redirect("admissions");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from admissionpatient where id='$id'");
        return redirect('admissions');
    }
}
