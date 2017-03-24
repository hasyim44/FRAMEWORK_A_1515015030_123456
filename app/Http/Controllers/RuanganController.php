<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ruangan;

class RuanganController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari RuanganController";
    return view('ruangan.awal',['data'=>Ruangan::all()]);
    }
    public function tambah()
   {
       // return $this->simpan();
      return view('ruangan.tambah');
   }
   public function simpan(Request $input)
   {
    $ruangan = new Ruangan();
    $ruangan->tittle = $input->tittle;
    $informasi = $ruangan->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
      return redirect ('ruangan') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $ruangan = Ruangan::find($id);
      return view('ruangan.edit')->with (array('ruangan'=>$ruangan));
   }
   public function lihat($id)
   {
    $ruangan = Ruangan::find($id);
      return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }
   public function update($id,Request $input)
   {
    $ruangan = Ruangan::find($id);
    $ruangan->tittle = $input->tittle;
    $informasi = $ruangan->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('ruangan') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $ruangan = Ruangan::find($id);
    $informasi = $ruangan->delete()? 'Berhasil hapus data':'Gagal hapus Data';
      return redirect ('ruangan') ->with (['Informasi'=>$informasi]);
   }
}
