<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'jabatan', 'status', 'foto', 'nik', 'no_kontrak', 'masa_kontrak'];
}
