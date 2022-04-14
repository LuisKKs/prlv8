<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref extends Model
{
    protected $table = "refaccion";
    protected $fillable = ['tipo'];
    public function reftel(){
        return $this->hasMany('App\Models\refTel','id_ref');
    }
    /*
    use HasFactory;
    */
}
