<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    use HasFactory;
    protected $table = 'golds';
    protected $fillable =[
        'nama',
        'nomor_hp',
        'emas'
    ];
    public function cairs()
    {
        return $this->belongsTo(Cairs::class);
    }
}
