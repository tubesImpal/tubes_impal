<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rs extends Model
{
    protected $table = 'rs';
    protected $primaryKey = 'id_rs';
    protected $fillable = [
        'id_rs',
        'pass_rs',
        'nama_rs',
        'alamat_rs'
    ];

    public function fk()
    {
        return $this->hasMany('App\dokter');
    }
}
