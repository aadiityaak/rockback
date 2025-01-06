<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ringkasan extends Model
{
    use HasFactory;

    protected $table = 'tb_ringkasan';
    protected $primaryKey = 'id_ringkasan';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'bulan',
        'laba_akuntansi',
        'zakat',
        'shodaqoh',
    ];
}