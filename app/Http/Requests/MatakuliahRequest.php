<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MatakuliahRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi= [
        'tittle'=>'required',
        'keterangan'=>'required|integer',
       
      ];
      if($this->is('Matakuliah/tambah')){
        	$validasi['tittle']= 'required';
      }
      return $validasi;
    }
}
