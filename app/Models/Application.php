<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'fullname',
        'phone_number',
        'mail',
        'course_title',
        'course_time',
        'course_langugage',
        'course_type'
    ];
}
