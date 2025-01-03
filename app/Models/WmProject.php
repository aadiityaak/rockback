<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WmProject extends Model
{
  use HasFactory;

  protected $table = 'tb_wm_project';
  protected $primaryKey = 'id_wm_project';
  public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

  protected $fillable = [
    'id_karyawan',
    'id',
    'start',
    'stop',
    'durasi',
    'webmaster',
    'date_mulai',
    'date_selesai',
    'qc',
    'catatan',
    'status_multi',
  ];
}
