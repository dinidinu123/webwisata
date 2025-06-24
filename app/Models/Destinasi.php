<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi';

    protected $fillable = [
        'id_lokasi',
        'nama_destinasi',
        'foto',
        'deskripsi',
        'lampiran',
        'lampiran_nama' 
    ];

    protected $casts = [
        'lampiran' => 'array',
        'lampiran_nama' => 'array', 
    ];

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi', 'id');
    }
}
