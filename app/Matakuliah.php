<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['tittle','keterangan'];
    protected $guarded = ['id'];
    public function dosen_matakuliah()
	{
		return $this->hasMany(Dosen_Matakuliah::class);
	}

}
