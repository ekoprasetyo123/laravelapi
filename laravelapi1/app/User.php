<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikel(){
        return $this->hasMany(\App\Artikel::class,'users_id','id');
    }

    public function kategoriArtikel(){
        return $this->hasMany(\App\KategoriArtikel::class,'users_id','id');
    }

    public function berita(){
        return $this->hasMany(\App\Berita::class,'users_id','id');
    }

    public function kategoriBerita(){
        return $this->hasMany(\App\KategoriBerita::class,'users_id','id');
    }

    public function pengumaman(){
        return $this->hasMany(\App\Pengumuman::class,'users_id','id');
    }

    public function kategoriPengumuman(){
        return $this->hasMany(\App\KategoriPengumuman::class,'users_id','id');
    }

    public function galeri(){
        return $this->hasMany(\App\Galeri::class,'users_id','id');
    }

    public function kategoriGaleri(){
        return $this->hasMany(\App\KategoriGaleri::class,'users_id','id');
    }

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
