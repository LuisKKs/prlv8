<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tel extends Model
{
    protected $table = "telefono";
    protected $fillable =
    ['numero_modelo',
    'procesador',
    'memoria_int',
    'memoria_ram',
    'cam_prin',
    'cam_frontal',
    'id_modelo'];
    public function modelo(){
        return $this->belongsTo('App\Models\modelo', 'id_modelo');
    }
    public function reftel(){
        return $this->hasMany('App\Models\refTel','id_tel');
    }
    /*public function ref_tel(){
        return $this->hasMany('App\ref_tel','id_ref');
    }
    public function acs_tel(){
        return $this->hasMany('App\acs_tel','id_acs');
    }
    use HasFactory;*/
}
