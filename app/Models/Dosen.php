<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nidn',
        'ttl',
        'jabatan',
        'email',
        'wa',
        'ig',
        'fb',
        'idGambar',
    ];
    public $timestamps = true;
}