<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    public $table = 'meetings';
    public $fillable = [
        'nomor',
        'type_id',
        'name',
        'pemimpin',
        'user_id',
        'tanggal',
        'waktu',
        'notulensi',

    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
