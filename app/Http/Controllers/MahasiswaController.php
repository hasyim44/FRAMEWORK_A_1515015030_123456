<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal ()
    {
    	return "Hello dari MahasiswaController";
    }
    public function tambah()
   {
   	   return $this->simpan();
   }
   public function simpan()
   {
   	$mahasiswa = new Mahasiswa();
   	$mahasiswa->nama = 'Hasyim TamVan';
   	$mahasiswa->nim = '1515015030';
   	$mahasiswa->alamat = 'Jl. Pramuka 19';
   	$mahasiswa->pengguna_id = '2';
   	$mahasiswa->save();
   	return "Data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
   }
}
