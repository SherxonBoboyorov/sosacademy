<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table= 'prices';

    protected $fillable =[
        'product_id',
        'number_people_ru', 'number_people_uz',
        'lesson_ru', 'lesson_uz',
        'course_fee_ru', 'course_fee_uz',
        'registration_course_ru', 'registration_course_uz',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
    ];

     public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    // public function product()
    // {
    //     return $this->belongsTo('App\Models\Product', 'product_id');
    // }

}
