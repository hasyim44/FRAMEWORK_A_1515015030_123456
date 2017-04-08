<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    protected $guarded = ['id'];
    public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }
    public function listDosenDanMatakuliah(){
          $out = [];
          foreach ($this->all()  as $dsnMtk) {
               $out[$dsnMtk->id]="{$dsnMtk->dosen->nama} (matakuliah {$dsnMtk->matakuliah->tittle})";
          }
          return $out;
     }
    public function matakuliah(){
    	return $this->belongsTo(Matakuliah::class);
    }
    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }
    public function getNipdosenAttribute(){
        return $this->dosen->nip;
    }
    public function getTittleMatakuliahAttribute(){
        return $this->matakuliah->tittle;
    }

}
