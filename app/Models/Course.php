<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'image1',
        'image2',
        'head_az',
        'head_en',
        'head_ru',
        'help_text_az',
        'help_text_en',
        'help_text_ru',
        'content_az',
        'content_en',
        'content_ru',
        'description_az',
        'description_en',
        'description_ru',
        'slug_az',
        'slug_en',
        'slug_ru',
    ];

    public function getImage1UrlAttribute()
    {
        return asset('storage/' . $this->image1);
    }

    public function getImage2UrlAttribute()
    {
        return asset('storage/' . $this->image2);
    }
}
