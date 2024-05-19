<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSurat extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kepala_surat';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_kop';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kop',
        'alamat_kop',
        'nama_tujuan',
        'id_user',
    ];

    /**
     * Get the user that owns the kepala surat.
     */
    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
