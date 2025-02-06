<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';

    protected $fillable = [
        'type',
        'head_az',
        'head_en',
        'head_ru',
        'content_az',
        'content_en',
        'content_ru',
    ];
}
