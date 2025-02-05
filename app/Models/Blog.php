<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'head_az',
        'head_en',
        'content_az',
        'content_en',
        'image',
        'description_az',
        'description_en',
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
