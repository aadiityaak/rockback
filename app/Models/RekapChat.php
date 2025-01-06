<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapChat extends Model
{
    use HasFactory;

    protected $table = 'tb_rekap_chat';
    protected $primaryKey = 'id';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'whatsapp',
        'chat_pertama',
        'via',
        'alasan',
        'detail',
        'kata_kunci',
        'tanggal_followup',
        'status_followup',
    ];
}