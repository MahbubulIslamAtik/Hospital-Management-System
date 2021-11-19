<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $doctor = DB::select("select id, doctor_name, email, phone, position, spetielists, gender, created_at from doctorlist");
            return view("pages.doctors.index", ["doctors"=>$doctor]);
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
        return view("pages.doctors.create_doctor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into doctorlist(doctor_name, email, phone, position, spetielists, gender, created_at)values('$request->txtDoctor', '$request->txtEmail', '$request->txtPhone', '$request->txtPosition', '$request->txtSpetielist', '$request->txtGender', now())");
        return redirect("doctors");
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
       
        $doctor=DB::select("select id, doctor_name, email, phone, position, spetielists, gender from doctorlist where id='$id'");
        return view("pages.doctors.edit", ["doctors"=>$doctor[0]]);
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
        DB::update("update doctorlist set doctor_name='$request->txtDoctor', email='$request->txtEmail', phone='$request->txtPhone', position='$request->txtPosition', spetielists='$request->txtSpetielist', gender='$request->txtGender' where id='$id'");
        return redirect("doctors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from doctorlist where id='$id'");
        return redirect('doctors');
    }
}
