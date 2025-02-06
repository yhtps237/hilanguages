<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'content_az',
        'content_en',
        'content_ru'
    ];

    public function images()
    {
        return $this->hasMany(StudentPhotoGallery::class, 'student_id', 'id');
    }

    public function getFirstImage()
    {
        return $this->images()->first();
    }
}
