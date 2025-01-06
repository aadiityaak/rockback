<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'tb_karyawan';
    protected $primaryKey = 'id_karyawan';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'nama',
        'hp',
        'wa',
        'bb',
        'email',
        'alamat',
        'tgl_masuk',
        'username',
        'password',
        'jenis',
    ];
}