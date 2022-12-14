<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lampu extends Model
{
    use HasFactory;
    protected $table = 'lampus';
    protected $fillable =[
        'nama',
        'nomor_hp',
        'PLN',
    ];
    public function cairs()
    {
        return $this->belongsTo(Cairs::class);
    }
}
