<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'photo_gallery_id',
        'image',
        'alternative',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function photoGallery()
    {
        return $this->belongsTo(PhotoGallery::class, 'photo_gallery_id', 'id');
    }
}
