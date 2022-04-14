<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    protected $table = "modelo";
    protected $fillable =
    ['modelo',
    'id_marca'];

    public function marca()
    {
        return $this->belongsTo('App\Models\marca', 'id_marca');
    }
    public function telefono(){
        return $this->hasMany('App\Models\tel','id_modelo');
    }
    public function accmod(){
        return $this->hasMany('App\Models\accMod','id_modelo');
    }
    /*
    use HasFactory;
    */
}
