<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Warranty extends Model
{
    use HasFactory;

    protected $table = 'warranties';

    protected $fillable = [
        'image',
        'title_ru', 'title_uz',
        'content_ru', 'content_uz',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/warranty/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/warranty/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $warranty): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $warranty->image)) {
                File::delete(public_path() . $warranty->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/warranty/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/warranty/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $warranty->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/warranty/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/warranty/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
