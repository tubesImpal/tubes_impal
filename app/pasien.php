<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'medical_record';
    protected $fillable = [
        'nama_pasien',
        'email_pasien',
        'pw_pasien',
        'tgl_lahir_pasien'
    ];
}
