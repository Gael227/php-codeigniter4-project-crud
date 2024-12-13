<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUjiModel extends Model
{
    protected $table = 'spesimen'; // Nama tabel
    protected $primaryKey = 'id_spesimen'; // Primary key tabel
    protected $allowedFields = [
        'nama_spesimen',
        'harga_spesimen_umum',
        'harga_spesimen_mahasiswa',
        'satuan',
        'status_spesimen',
    ]; // Kolom yang boleh diisi
}
