<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\File;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sub_category_id',
        'slug_ru', 'slug_uz',
        'title_ru', 'title_uz',
        'course_description_ru', 'course_description_uz',
        'age_of_students',
        'complexity',
        'course_registration_ru', 'course_registration_uz',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
    ];


    public function sub_category(): HasOne
    {
        return $this->belongsTo(Sub_category::class, 'id', 'category_id');
    }



    public function prices(): HasMany
    {
        return $this->hasMany(Price::class, 'product_id', 'id');
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'category_id');
    }

    public function childs(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }


}
