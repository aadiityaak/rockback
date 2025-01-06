<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konversi extends Model
{
    use HasFactory;

    protected $table = 'tb_konversi';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'date',
        'value',
    ];
}