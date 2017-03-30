<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table ='pengguna';
    protected $fillable = ['username','password'];

    public function mahasiswa()
	{
		return $this->hasOne(Mahasiswa::class);
		$mahasiswa=Pengguna::find(1)->mahasiswa;
	}
	public function dosen()
	{
		return $this->hasOne(Dosen::class);
	}
	// public function peran()
	// {
	// 	return $this->belongsTo(Peran::class);
	// }
}