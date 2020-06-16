<?php

namespace App\Http\Controllers\myNikLatInfoCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myNikLatInfoCenterController extends Controller{
    public function myNikLatInfoCenterLogin(Request $request){
        return view('myNikLatInfoCenter.login');
    }
    
    public function myNikLatInfoCenter(Request $request){
        $user = $request->inputEmail;
        $pass = $request->inputPassword;
        $conexion = \DB::connection('LAT_MyNIKKEN');
            $login = $conexion->select("SELECT Associateid, Password FROM AdminCentro WHERE Associateid = '$user'");
        \DB::disconnect('LAT_MyNIKKEN');
        if(sizeof($login) > 0){
            if($user == $login[0]->Associateid && $pass == $login[0]->Password){
                return view('myNikLatInfoCenter.home');
            }
            else{
                return redirect('myNikLatInfoCenterLogin');
            }
        }
        else{
            return redirect('myNikLatInfoCenterLogin');
        }
    }

    public function cenInfMyNkSavePost(Request $request){
        $content = $request->content;

        $conexion = \DB::connection('LAT_MyNIKKEN');
            $post = $conexion->insert("INSERT INTO CentroInfo(Descripcion) values('$content') ");
        \DB::disconnect('LAT_MyNIKKEN');

        if($post){
            return "inserted";
        }
        else{
            return "error";
        }
    }

    public function myNikLatViewPost(){
        $conexion = \DB::connection('LAT_MyNIKKEN');
            $post = $conexion->select("SELECT TOP 1 Descripcion FROM CentroInfo ORDER BY Id_Auto DESC");
        \DB::disconnect('LAT_MyNIKKEN');

        return view('myNikLatInfoCenter.post', compact('post'));
    }

    public function getLastPost(){
        $conexion = \DB::connection('LAT_MyNIKKEN');
            $post = $conexion->select("SELECT TOP 1 Descripcion FROM CentroInfo ORDER BY Id_Auto DESC");
        \DB::disconnect('LAT_MyNIKKEN');

        return $post;
    }
}
