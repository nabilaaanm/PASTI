<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal_mata_kuliah extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_mata_kuliah';
    protected $primaryKey = 'jadwalid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'jadwalid',
        // nambahin kode prodi buat tabel persetujuan jadwal di dekan
        'kodeprodi',
        'jam_mulai',
        'ruangan',
        'kelas',
        'hari',
        'kodemk',
        'kuota',
        'koordinator',
        'pengampu1',
        'pengampu2',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'kodeprodi', 'kodeprodi');
    }

    // Relasi dengan Matkul
    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'kodemk', 'kode');
    }
}

