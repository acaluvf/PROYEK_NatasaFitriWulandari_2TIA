<?php

// app/Models/Evaluasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    protected $fillable = ['nama', 'jabatan', 'catatan', 'rating'];
}

