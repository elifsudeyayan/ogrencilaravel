<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uye extends Model
{
    use HasFactory;

    protected $table = 'uyeler';
    protected $fillable = ['username', 'email', 'password'];

    // ...
}
