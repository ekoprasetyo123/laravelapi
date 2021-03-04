<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
        'nama','keterangan','path','users_id','kategori_galeri_id'
    ];

    public function kategoriGaleri(){
        return $this->belongsTo(\App\KategoriGaleri::class,'kategori_artikel_id','id');
    }

    public function User(){
        return $this->belongsTo(\App\User::class,'users_id','id');
    }
}
