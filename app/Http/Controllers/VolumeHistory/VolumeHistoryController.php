<?php

namespace App\Http\Controllers\VolumeHistory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class VolumeHistoryController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        $lang = $request->lang;

        App::setLocale($lang);

        return view('volumehistory.index', compact('associateid', 'lang'));
    }
}
