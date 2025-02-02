<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'judul',
        'pengarang',
        'tanggal_publikasi',
    ];
    protected $casts = ['tanggal_publikasi' => 'date'];
}
