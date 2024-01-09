<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Form extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'nomor_identitas',
    'nama',
    'tempat_lahir',
    'tanggal_lahir',
    'agama',
    'alamat',
    'nomor_telepon',
    'email',
    ];
}
