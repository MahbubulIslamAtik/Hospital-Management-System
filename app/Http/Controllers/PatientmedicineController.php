<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientmedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $medicine = DB::select("select m.id, a.name, d.doctor_name, pm.medicine, m.medicine_price, m.created_at from patientmedicine m, patient_appointment a, doctorlist d, prescriptiondetails pm where a.id=m.patient_id and d.id=m.doctor_id and pm.id=m.medicine_id order by m.id");
            return view("pages.patientmedicine.index", ["medicines"=>$medicine]);
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
        
        $appointment = DB::select("select id, name from patient_appointment");
        $doctorlist = DB::select("select id, doctor_name from doctorlist");
        $pmedicine = DB::select("select id, medicine from prescriptiondetails");

        return view("pages.patientmedicine.create_medicine", ["appointments"=>$appointment,"doctorlists"=>$doctorlist, "pmedicines"=>$pmedicine]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into patientmedicine (patient_id, doctor_id, medicine_id, medicine_price, created_at) values ('$request->cmbPatient', '$request->cmbDoctor', '$request->cmbMedicine', '$request->txtAmount', now())");
        return redirect("medicines");
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
        DB::delete("delete from patientmedicine where id='$id'");
        return redirect('medicines');
    }
}
