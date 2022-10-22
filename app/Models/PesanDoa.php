<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanDoa extends Model
{
    use HasFactory;
    protected $fillable = ['undangan', 'nama', 'pesan'];
}
