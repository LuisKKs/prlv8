<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accMod extends Model
{
    protected $table = "acc_mod";
    protected $fillable =
    ['nota',
    'marca_acc',
    'modelo_acc',
    'id_modelo',
    'id_accesorio'];
    public function modelo(){
        return $this->belongsTo('App\Models\modelo', 'id_modelo');
    }
    public function accesorio(){
        return $this->belongsTo('App\Models\acc', 'id_accesorio');
    }
    /*
    use HasFactory;
    */
}
