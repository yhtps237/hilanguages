<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'head_az',
        'head_en',
        'head_ru',
        'content_az',
        'content_en',
        'content_ru',
        'image',
        'description_az',
        'description_en',
        'description_ru',
        'keyword',
    ];

    /**
     * Get full image paths.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
