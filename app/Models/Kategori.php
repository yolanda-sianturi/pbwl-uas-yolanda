<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori';
    protected $primaryKey = 'kategori_id';
    protected $guarded = '[]';
    protected $fillable = [
        'kategori_id',
        'kategori_nama',
        'kategori_harga'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(transaksi::class, 'transaksi_id_kategori', 'kategori_id');    
    }
}
