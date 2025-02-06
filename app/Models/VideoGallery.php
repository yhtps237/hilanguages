<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;

    protected $table = 'video_gallery';

    protected $fillable = [
        'image',
        'url',
        'head_az',
        'head_en',
        'head_ru',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
