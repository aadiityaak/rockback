<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrKeluar extends Model
{
  use HasFactory;

  protected $table = 'tb_transaksi_keluar';
  protected $primaryKey = 'id_transaksi_keluar';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'tgl',
    'jml',
    'jenis',
    'deskripsi',
  ];
}
