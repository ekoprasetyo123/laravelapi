<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','users_id'
    ];

    public function galeris(){
        return $this->hasMany(\App\Galeri::class,'kategori_artikel_id','id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class,'users_id','id');
    }
}
