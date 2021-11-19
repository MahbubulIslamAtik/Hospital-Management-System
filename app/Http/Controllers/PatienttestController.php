<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatienttestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $testpatient = DB::select("select t.id, a.admission, p.name, d.doctor_name, te.test_name, t.price, t.created_at from patienttest t, admissionpatient a, patient_appointment p, doctorlist d, test te where a.id=t.admission_id and p.id=t.patient_id and d.id=t.doctor_id and te.id=t.test_id order by t.id");
            return view("pages.patienttest.index", ["testpatients"=>$testpatient]);
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
        $admission = DB::select("select id, admission from admissionpatient");
        $appointment = DB::select("select id, name from patient_appointment");
        $doctorlist = DB::select("select id, doctor_name from doctorlist");
        $testname = DB::select("select id, test_name from test");
        return view("pages.patienttest.create_test", ["admissions"=>$admission,"appointments"=>$appointment,"doctorlists"=>$doctorlist, "testnames"=>$testname]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into patienttest (admission_id, patient_id, doctor_id, test_id, price, created_at) values ('$request->cmbAdmission','$request->cmbPatient', '$request->cmbDoctor', '$request->cmbTestname', '$request->txtAmount', now())");
        return redirect("testpatients");
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
        DB::delete("delete from patienttest where id='$id'");
        return redirect('testpatients');
    }
}
