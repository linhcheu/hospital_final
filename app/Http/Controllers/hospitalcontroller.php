<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class hospitalcontroller extends Controller
{
    public function hospitaldetail(request $req){

        // echo $req->h_name;
        // echo $req->h_id;
        //In here is to get the hospital details from the database
        // and show it in the view
        // $hospital = hospital::findOrFail($req->hid);
  $hospital = DB::select(
        'SELECT hospitals.* FROM hospitals WHERE hospitals.hospital_id = ?',
        [$req->hid]
    );

    return view('show', [
        'v_hospital' => $hospital
    
         ]);
    }
    
}
