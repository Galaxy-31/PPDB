<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nisn',
    'jk',
    'name',
    'asal_sekolah',
    'email',
    'no_tlp',
    'no_tlp_ibu',
    'no_tlp_ayah',
    'referensi',
    'jurusan',
    'password'];
}
