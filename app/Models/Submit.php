<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    use HasFactory;
    
    protected $table = 'dokumen'; // Nama tabel dalam database

    protected $primaryKey = 'idtracking'; // Nama kolom primary key
    protected $guarded =[];


    // Tambahan metode atau relasi bisa ditambahkan di sini
}
