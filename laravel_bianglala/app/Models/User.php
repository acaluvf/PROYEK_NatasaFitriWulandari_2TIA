<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\AuthController;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
