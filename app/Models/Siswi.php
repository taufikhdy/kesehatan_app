<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswi extends Model
{
    use HasFactory;
    protected $table = 'data_siswi';
    protected $fillable = [
        'nama', 'kelas', 'wali_kelas', 'keluhan', 'status', 'tanggal'
    ];
}
