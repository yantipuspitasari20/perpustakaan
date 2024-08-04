<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'no_buku', 'id_anggota', 'tgl_peminjaman', 'tgl_pengembalian', 'status'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku', 'id');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id');
    }
}
