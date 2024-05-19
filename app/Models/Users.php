<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'id_user';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'username', 
        'password', 
        'status', 
        'nama_ptgs'
    ];
    use HasFactory;

    /**
     * Get the kepala surat for the user.
     */
    public function kepalaSurat()
    {
        return $this->hasMany(KepalaSurat::class, 'id_user');
    }
}
