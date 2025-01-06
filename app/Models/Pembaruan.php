<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembaruan extends Model
{
    use HasFactory;

    protected $table = 'tb_pembaruan';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'id_webhost',
        'tanggal',
        'tanggal_masuk',
        'status',
    ];
}