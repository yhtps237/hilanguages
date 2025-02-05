<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $table = 'photo_gallery';

    protected $fillable = [
        'image',
        'alternative',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'photo_gallery_id', 'id');
    }
}
