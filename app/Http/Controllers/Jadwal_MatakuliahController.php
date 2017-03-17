<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    public function awal ()
    {
    	return "Hello dari Jadwal_MatakuliahController";
    }
    public function tambah()
   {
   	   return $this->simpan();
   }
   public function simpan()
   {
   	$jadwal_matakuliah = new JadwaL_Matakuliah();
   	$jadwal_matakuliah->mahasiswa_id = '2';
   	$jadwal_matakuliah->ruangan_id = '1';
   	$jadwal_matakuliah->dosen_matakuliah = '3';
   	$jadwal_matakuliah->save();
   	return "Data dengan jadwal matakuliah {$jadwal_matakuliah->mahasiswa_id} telah disimpan";
   }
}
