<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'alasan',
        'status',
    ];
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    // Metode atau relasi tambahan dapat ditambahkan di sini jika diperlukan
}
