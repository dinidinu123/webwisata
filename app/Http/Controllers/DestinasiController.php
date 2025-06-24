<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Destinasi;
use Illuminate\View\View;

class DestinasiController extends Controller
{

    public function list(): View
    {
        $data = Destinasi::all();
        return view('destinasi.list', ['data' => $data]);
    }

    public function list_Lokasi($id): View
    {
        $data = Destinasi::where('id_lokasi', $id)->get();
        $dataLokasi = Lokasi::find($id);
        return view('destinasi.lokasi', ['data' => $data, 'lokasi' => $dataLokasi]);
    }

    public function detail($id)
{
    $data = Destinasi::find($id);

    if (!$data) {
        abort(404);
    }

    return view('destinasi.detail', ['data' => $data]);
}


}
