<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sakit extends Model
{
    use HasFactory;
    protected $table = 'data_sakit';
    protected $fillable = [
        'nama', 'kelas', 'wali_kelas', 'keluhan', 'status', 'tanggal'
    ];
}
