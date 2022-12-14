<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calback extends Model
{
    use HasFactory;

    protected $table = 'calbacks';

    protected $fillable = [
        'phone',
        'address_ru', 'address_uz',
        'gmail',
        'information_ru', 'information_uz'
    ];
}
