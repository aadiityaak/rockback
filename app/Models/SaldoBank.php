<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoBank extends Model
{
    use HasFactory;

    protected $table = 'tb_saldo_bank';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'bulan',
        'bank',
        'nominal',
    ];
}