<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class marca extends Model
{
    protected $table = "marca";
    protected $fillable = ['marca'];
    public function modelo(){
        return $this->hasMany('App\Models\modelo','id_marca');
    }
    /*
    public function acs_tel(){
        return $this->hasMany('App\acs_tel','id_acs');
    }
    use HasFactory;*/
}
