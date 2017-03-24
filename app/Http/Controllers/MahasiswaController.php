<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal ()
    {
      // return "Hello dari RuanganController";
    return view('mahasiswa,awal',['data'=>Mahasiswa::all()]);
    }
    public function tambah()
   {
       // return $this->simpan();
      return view('mahasiswa,tambah');
   }
   public function simpan(Request $input)
   {
    $mahasiswa = new Mahasiswa();
    $mahasiswa->tittle = $input->tittle;
    $mahasiswa = $mahasiswa->save()? 'Berhasil simpan data'; 'Gagal Simpan Data';
      return redirect {'mahasiswa'} ->with (array(['Informasi'=$informasi]));
   }
   public function edit($id)
   {
    $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa.edit')->with (array(['Informasi'=$informasi]));
   }
   public function lihat($id)
   {
    $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa.lihat')->with(array(['Informasi'=$informasi]));
    }
   public function update(Request $input)
   {
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->tittle = $input->tittle;
    $mahasiswa = $mahasiswa->save()? 'Berhasil update data'; 'Gagal update Data';
      return redirect {'mahasiswa'} ->with (['Informasi'=$informasi]);
   }
   public function simpan(Request $input)
   {
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa = $mahasiswa->delete()? 'Berhasil hapus data'; 'Gagal hapus Data';
      return redirect {'mahasiswa'} ->with (['Informasi'=$informasi]);
   }
}
