<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refTel extends Model
{
    protected $table = "ref_tel";
    protected $fillable =
    ['nota',
    'marca_ref',
    'modelo_ref',
    'id_ref',
    'id_tel'];
    public function telefono(){
        return $this->belongsTo('App\Models\tel', 'id_tel');
    }
    public function refaccion(){
        return $this->belongsTo('App\Models\ref', 'id_ref');
    }
    //use HasFactory;
}
