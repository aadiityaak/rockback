<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
  use HasFactory;

  protected $table = 'tb_paket';
  protected $primaryKey = 'id_paket';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'paket',
    'bobot',
  ];
}
