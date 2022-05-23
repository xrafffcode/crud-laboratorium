<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'table_barang';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_barang', 'jumlah_barang', 'kategori', 'kondisi'];
}
