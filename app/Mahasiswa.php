<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
	{
		return $this->belongsTo(Pengguna::class);
	}
	 public function jadwal_matakuliah()
	{
		return $this->hasMany(Jadwal_Matakuliah::class);
	}
}
