<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrean extends Model
{
    use HasFactory;
    protected $table = 'antriansoal';

    protected $fillable = [
        'statusdipanggil'
    ];
}
