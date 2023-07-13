<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'tb_customer';
    protected $primaryKey = 'customer_id';
    protected $guarded = '[]';
    protected $fillable = [
        'customer_id',
        'customer_nama',
        'customer_alamat',
        'customer_no_tlpn'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(transaksi::class, 'transaksi_id_customer', 'customer_id');    
    }
}
