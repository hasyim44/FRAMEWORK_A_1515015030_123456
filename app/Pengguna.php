<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Pengguna extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword; 
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