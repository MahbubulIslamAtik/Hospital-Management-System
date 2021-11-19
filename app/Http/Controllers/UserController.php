<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $users = DB::select("select u.id, u.username, u.password, r.name from users u, roles r where r.id=u.role_id order by u.id");
            return view("pages.user.index", ["users"=>$users]);
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
        $role = DB::select("select id, name from roles");
        return view("pages.user.create", ["roles"=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        DB::insert("insert into users(username, password, role_id)values('$request->txtUsername', '$request->txtPassword', '$request->cmbRole')");
        return redirect("users");
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
        $roles = DB::select("select id, name from roles");
        $user=DB::select("select u.id, u.username, u.password, r.name from users u, roles r where r.id=u.role_id and u.id='$id'");
        return view("pages.user.edit", ["user"=>$user[0], "roles"=>$roles]);
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
        DB::update("update users set username='$request->txtUsername', password='$request->txtPassword', role_id='$request->cmbRole' where id='$id'");
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from users where id='$id'");
        return redirect('users');
    }
}
