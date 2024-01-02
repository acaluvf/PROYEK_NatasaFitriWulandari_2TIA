<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenggajian extends Model
{
    use HasFactory;

    protected $fillable = ['karyawan_id', 'gaji_masuk', 'gaji_keluar', 'tanggal_pengambilan', 'status'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
