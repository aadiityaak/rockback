<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    use HasFactory;

    protected $table = 'tb_iklan';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'nama_web',
        'kontak',
        'paket',
        'tanggal',
        'via',
        'chat_pertama',
    ];
}