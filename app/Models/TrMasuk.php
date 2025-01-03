<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrMasuk extends Model
{
  use HasFactory;

  protected $table = 'tb_transaksi_masuk';
  protected $primaryKey = 'id_transaksi_masuk';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'id',
    'tgl',
    'total_biaya',
    'bayar',
    'pelunasan',
  ];
}
