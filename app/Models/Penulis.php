<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    // Kolom kunci primer
 
    
    // Nama tabel yang terkait dengan model
    protected $table = 'penulis';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['nama_penulis', 'tempat_lahir', 'tanggal_lahir','email'];

    // Relasi dengan buku
    public function buku()
    {
        return $this->hasMany(Buku::class, 'kd_penulis', 'kd_penulis');
    }
}