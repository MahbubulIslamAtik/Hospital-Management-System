<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller{
    function login(Request $request){
        // echo "Ok";
        $username = $request->txtUsername;
        $password = $request->txtPassword;

        $user_id = DB::select("select u.id, u.username, u.role_id, r.name role from users u, roles r where u.role_id=r.id and Username='$username' and Password='$password' ");

        if($user_id==null){
            return redirect("/")->with(['status'=> 'Incorrect username or password!', 'username'=>$username, 'password'=>$password]);
        }else{
            $user=$user_id[0];
            $session_id = session()->getId();
            session([
                "sess_id"=> $session_id,
                "sess_user"=> $user->id,
                "sess_username"=> $user->username,
                "sess_role_id"=> $user->role_id,
                "role_name"=> $user->role
            ]);
            return redirect("/dashboard");
        }
    }

    function logout(){
        session()->forget(['sess_id', 'sess_user', 'sess_username', 'sess_role_id', 'role_name']);
        session()->flush();
        session()->regenerate();
        return redirect("/");
    }
}
