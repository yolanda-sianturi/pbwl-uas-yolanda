<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_id_kategori',
        'transaksi_tgl_booking',
        'transaksi_id_customer',
        'transaksi_harga',
        'transaksi_jumlah_bayar'
    ];
    public function kategori() :BelongsTo
    {
        return $this->belongsTo(kategori::class, 'transaksi_id_kategori');    
    }
    public function customer() :BelongsTo
    {
        return $this->belongsTo(Customer::class, 'transaksi_id_customer');    
    }
    
}
