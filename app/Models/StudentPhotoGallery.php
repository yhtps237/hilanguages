<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPhotoGallery extends Model
{
    use HasFactory;

    protected $table = 'student_photo_gallery';

    protected $fillable = [
        'student_id',
        'image',
        'alternative',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function photoGallery()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
