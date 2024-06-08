<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\models\Kategoribarang;
use App\Models\Suplier;
use App\Models\Pengadaan;
use App\Models\ruang_lab;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function kategori_barang()
    {
        $kategori = Kategoribarang::all();
        return view('kategori_barang', compact('kategori'));
    }
    
    public function v_barang()
    {
        $barang = barang::all();
        return view('v_barang', compact('barang'));
    }

    public function v_suplier()
    {
        $suplier = Suplier::all();
        return view('v_suplier', compact('suplier'));
    }
    public function v_pengadaan()
    {
        $adaan = Pengadaan::all();
        return view('v_pengadaan', compact('adaan'));
    }
    public function v_ruanglab()
    {
        $rlab = ruang_lab::all();
        return view('v_ruanglab', compact('rlab'));
    }
    
}