<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    use HasFactory;
    protected $table = 'wallets';

    protected $fillable = [
        'nama',
        'nomor_hp',
        'jenis',
        'no_wallet',
        'total'
    ];
    public function cairs()
    {
        return $this->belongsTo(Cairs::class);
    }
}
