<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
  use HasFactory;

  protected $table = 'tb_cuti';
  protected $primaryKey = 'id';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'nama',
    'tanggal',
    'jenis',
    'time',
    'tipe',
    'detail',
  ];
}
