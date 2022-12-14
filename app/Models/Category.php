<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\File;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'slug_ru', 'slug_uz',
        'title_ru', 'title_uz',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
    ];


    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function parent(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function childs(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function sub_categories(){
        return $this->hasMany(Sub_category::class)->with('products');
    }

}
