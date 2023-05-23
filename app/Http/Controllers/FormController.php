<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('biodata');
    }
    public function daftar() {
        $ar_lokasi = ['Jakarta','Bangkok','Depok','Paris','Kuala lumpur'];
        $ar_skill = ['PHP','MySQL','Javascript','HTML','CSS'];
        return view('biodata',['lokasi'=>$ar_lokasi,'skill'=>$ar_skill]);
    }
    public function hasil(Request $request) {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('hasil', ['data' => $request]);
        
    }
}
