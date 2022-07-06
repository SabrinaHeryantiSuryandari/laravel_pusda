<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_aset extends Model
{
    use HasFactory;
    
    protected $fillable = [
        // 'title', 'content'
            'no_sertifikat',
            'alamat_aset',
            'luas_aset',
            'status_aset',
            'kondisi_das',
            'kondisi_geografis',
            'asalusul_aset',
            'th_kepemilikam',
            'th_pembangunan',
            'th_rehab',
            'keterangan'
    ];
}
