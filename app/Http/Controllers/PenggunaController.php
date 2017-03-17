<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

class PenggunaController extends Controller
{
    public function awal ()
    {
    	return "Hello dari PenggunaController";
    }
    public function tambah()
   {
   	   return $this->simpan();
   }
   public function simpan()
   {
   	$pengguna = new Pengguna();
   	$pengguna->username = 'hasim';
   	$pengguna->password = '1234';
   	$pengguna->save();
   	return "Data dengan pengguna {$pengguna->username} telah disimpan";
   }
}
