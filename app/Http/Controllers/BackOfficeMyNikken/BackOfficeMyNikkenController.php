<?php

namespace App\Http\Controllers\BackOfficeMyNikken;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackOfficeMyNikkenController extends Controller{
    public function login(Request $request){
        return view('backOffice.index');
    }

    public function homebf(Request $request){
        return view('backOffice.home');
    }
}
