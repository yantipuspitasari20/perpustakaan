<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'no_buku',
        'anggota',
        'peminjaman',
        'pengembalian',
        'status',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku');
    }
}
