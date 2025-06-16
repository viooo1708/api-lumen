<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens'; // Nama tabel
    protected $primaryKey = 'no'; // Primary key
    public $incrementing = true; // Autoincrement
    protected $fillable = [
        'nip',
        'nama_lengkap',
        'no_telepon',
        'email',
        'alamat'
    ];
}
