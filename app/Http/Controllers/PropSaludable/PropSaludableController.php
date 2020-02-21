<?php

namespace App\Http\Controllers\PropSaludable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropSaludableController extends Controller{

    public function index(Request $request){
        $associateid = $request->associateid;
        return view('PropSaludable.index', compact('associateid'));
    }

    public function finszSalStatusPers(Request $request){
        $associateid = $request->associateid;
        return view('PropSaludable.statusper', compact('associateid'));
    }

    public function finszsalRepo(Request $request){
        $associateid = $request->associateid;
        return view('PropSaludable.statusper', compact('associateid'));
    }
}
