<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrescriptiondetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $prescriptdetail=DB::select("select id, medicine, dose, comments, status from prescriptiondetails");
            return view("pages.prescriptiondetails.index",["prescriptdetails"=>$prescriptdetail]);
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
        return view("pages.prescriptiondetails.create_prescriptiondetails");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into prescriptiondetails (medicine, dose, comments, status) values ('$request->txtMedicine', '$request->txtDose', '$request->txtComments', '$request->txtStatus')");
        return redirect("prescriptiondetails");
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
        $prescriptdetail=DB::select("select id, medicine, dose, comments, status from prescriptiondetails");
        return view("pages.prescriptiondetails.index", ["prescriptdetails"=>$prescriptdetail[0]]);
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
        DB::update("update prescriptiondetails set medicine='$request->txtMedicine', dose='$request->txtDose', comments='$request->txtComments', status='$request->txtStatus' where id='$id'");
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
        DB::delete("delete from prescriptiondetails where id='$id'");
        return redirect('prescriptions');
    }
}
