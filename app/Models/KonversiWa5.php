<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonversiWa5 extends Model
{
    use HasFactory;

    protected $table = 'tb_konversi_wa5';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'date',
        'value',
    ];
}