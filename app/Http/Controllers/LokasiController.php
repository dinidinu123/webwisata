<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use Illuminate\View\View; 

class LokasiController extends Controller
{
    public function list(): View 
    { 
        $data = Lokasi::all(); 
        return view('lokasi.list', [ 'data' => $data ]); 
    } 

}
