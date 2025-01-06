<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PmProject extends Model
{
    use HasFactory;

    protected $table = 'tb_pm_project';
    protected $primaryKey = 'id_pm_project';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'id',
        'konfirm_revisi_1',
        'fr1',
        'tutorial_password',
        'selesai',
    ];
}