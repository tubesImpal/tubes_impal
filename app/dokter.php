<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dok';
    protected $primaryKey = 'id_dokter';
    protected $fillable = [
        'nama_dokter',
        'spesialis'
    ];

    public function fk()
    {
        return $this->hasMany('App\rs');
    }
    
}
?>
