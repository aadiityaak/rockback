<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webhost extends Model
{
  use HasFactory;

  protected $table = 'tb_webhost';
  protected $primaryKey = 'id_webhost';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'nama_web',
    'id_paket',
    'tgl_mulai',
    'id_server2',
    'id_server',
    'space',
    'space_use',
    'hp',
    'telegram',
    'hpads',
    'wa',
    'email',
    'tgl_exp',
    'tgl_update',
    'server_luar',
    'saldo',
    'kategori',
    'waktu',
    'via',
    'konfirmasi_order',
    'kata_kunci',
    'jenis_kelamin',
    'usia',
  ];
}
