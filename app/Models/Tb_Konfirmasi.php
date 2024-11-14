<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_Konfirmasi extends Model
{
    use HasFactory;
    protected $table = 'tb_konfirmasi';
    protected $fillable = [
        'nama',
        'kelas',
        'wali_kelas',
        'keluhan',
        'status',
        'tgl_sakit',
        'tgl_berobat',
        'obat',
        'catatan'
    ];
}
