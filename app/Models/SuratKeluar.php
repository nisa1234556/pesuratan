<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';

    protected $primaryKey = 'id_kop';

    protected $fillable = [
        'no_surat',
        'perihal',
        'tujuan',
        'isi_surat',
    ];
}
