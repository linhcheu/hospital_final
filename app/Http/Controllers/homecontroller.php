<?php

namespace App\Http\Controllers;
use App\Models\hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homecontroller extends Controller
{

public function show($id)
{
    $hospital = hospital::findOrFail($id);
    return view('hospital.show', compact('hospital'));
}

public function partner()
{
$hospital = DB::table('hospitals')->get();

    return view('partner', [
        'v_hospital' => $hospital
    ]);
}
    
}
