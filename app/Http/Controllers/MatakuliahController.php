<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function awal ()
    {
    	return "Hello dari MatakuliahController";
    }
    public function tambah()
   {
   	   return $this->simpan();
   }
   public function simpan()
   {
   	$matakuliah = new Matakuliah();
   	$matakuliah->tittle = 'Peemrograman Framework';
   	$matakuliah->keterangan = 'Cobaan';
   	$matakuliah->save();
   	return "Data dengan matakuliah {$matakuliah->tittle} telah disimpan";
   }
}
