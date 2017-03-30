<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'peran';

    public function pengguna()
// 	{
// 		return $this->belongsToMany(Pengguna::class);
// 	}
// }
