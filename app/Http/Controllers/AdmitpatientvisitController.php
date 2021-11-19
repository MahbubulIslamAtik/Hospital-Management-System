<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmitpatientvisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $visit=DB::select("select v.id, p.name, d.doctor_name,  v.date, v.visit_price, v.created_at from admitpatientvisit v, patient_appointment p, doctorlist d where p.id=v.patient_id and d.id=v.doctor_id order by v.id");
            return view("pages.patientvisit.index", ["visits"=>$visit]);
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
        return view("pages.patientvisit.create_visit", ["doctornames"=>$doctorname, "patientnames"=>$patientname]);
        redirect("patientvisits");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into admitpatientvisit(patient_id, doctor_id, date, visit_price, created_at)values('$request->cmbPatient', '$request->cmbDoctor', '$request->txtDate', '$request->txtVisitprice', now())");
        return redirect("patientvisits");
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
        DB::delete("delete from admitpatientvisit where id='$id'");
        return redirect('patientvisits');
    }
}
