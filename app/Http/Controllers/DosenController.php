<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class DosenController extends Controller
{
    public function awal ()
    {
    	return "Hello dari DosenController";
    }
    public function tambah()
   {
   	   return $this->simpan();
   }
   public function simpan()
   {
   	$dosen = new Dosen();
   	$dosen->nama = 'Hasyim Asyari';
   	$dosen->nip = '19970404';
   	$dosen->alamat = 'Jl. Pramuka 19';
   	$dosen->pengguna_id = '1';
   	$dosen->save();
   	return "Data dengan dosen {$dosen->nama} telah disimpan";
   }
}
