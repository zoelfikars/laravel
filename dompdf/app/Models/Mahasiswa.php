<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    use HasFactory;

    protected $fillable = [
        'name',
        'class',
        'npm',
    ];
}
