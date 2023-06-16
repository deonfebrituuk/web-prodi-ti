<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = [
        'visi',
        'misi',
        'idGambar',
        'ig',
        'fb',
        'linkedin'
    ];
    public $timestamps = true;
}