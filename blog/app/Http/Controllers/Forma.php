<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forma extends Controller
{
    function kmi() {
        return view('testas');
    }
    function post(Request $request) {
        if (isset($request->svoris) && isset($request->ugis)) {
            $svoris = $request->svoris;
            $ugis = $request->ugis;
            $kmi = round ($svoris/(($ugis/100)*2),1);
            $data = array('kmi' => $kmi);
        }
        return view('testas', $data);
    }

}
