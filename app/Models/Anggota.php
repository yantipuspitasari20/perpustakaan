<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota'; // Sesuaikan nama tabel dengan yang ada di database
    protected $fillable = [
        'id_anggota',
        'nama',
        'no_hp',
        'alamat',
        'email'
    ];
    protected $primaryKey = 'id_anggota'; // Sesuaikan dengan nama primary key yang digunakan

    public function user()
    {
        return $this->belongsTo(User::class); // Ubah sesuai relasi yang dibutuhkan
    }
}
