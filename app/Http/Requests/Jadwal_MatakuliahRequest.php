<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;


class Jadwal_MatakuliahRequest extends Request
{
    //
    public function authorize()
    {
    	return true;
    }
public function rules()
{
	$validasi = [
		'dosen_matakuliah_id'=>'required',
		'mahasiswa_id'=>'required',
		'ruangan_id'=>'required'
	];

	if ($this->is('dosen_matakuliah/tambah')){
		$validasi['password'] = 'required';
	}
	return $validasi;
	}
}
