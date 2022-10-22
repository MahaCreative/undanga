<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'atas_nama',
        'pesan',
        'nominal',
        'undangan'
    ];
}
