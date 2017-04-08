<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_Matakuliah;

use App\Dosen;
use App\Matakuliah;

class Dosen_MatakuliahController extends Controller
{ 
    protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari Dosen_MatakuliahController";
      $semuaDosenMatakuliah= Dosen_Matakuliah::all();
      return view('dosen_matakuliah.awal',compact('semuaDosenMatakuliah'));
    }
    public function tambah()
   {
   	   // return $this->simpan();
        
        $matakuliah = new Matakuliah;
        $dosen = new Dosen;
        $dosen_matakuliah = new Dosen_Matakuliah;
       return view('dosen_matakuliah.tambah', compact('matakuliah','dosen','dosen_matakuliah'));
   }
   public function simpan(Request $input)
   {
   	// $dosen_matakuliah = new Dosen_Matakuliah();
   	// $dosen_matakuliah->dosen_id = '1';
   	// $dosen_matakuliah->matakuliah_id = '1';
   	// $dosen_matakuliah->save();
   	// return "Data dengan dosen {$dosen_matakuliah->dosen_id} telah disimpan";
      $dosen_matakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));
      if ($dosen_matakuliah->save()) $this->informasi = "Matkuliah dan Dosen Berhasil Di Simpan";
      return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
   }
    public function edit($id)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
       return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function lihat($id)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
       return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if ($dosen_matakuliah->save()) $this->informasi = "Matkuliah dan Dosen Berhasil Di Perbaharui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        if ($dosen_matakuliah->delete()) $this->informasi = "Matkuliah dan Dosen Berhasil Di Hapus";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}
