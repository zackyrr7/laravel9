<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdam extends Model
{
    use HasFactory;
    protected $table = 'pdams';
    protected $fillable =[
        'nama',
        'nomor_hp',
        'air',
    ];
    public function cairs()
    {
        return $this->belongsTo(Cairs::class);
    }
}
