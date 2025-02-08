<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'phone_number',
        'phone_number2',
        'wp_phone_number',
        'email',
        'email2',
        'map',
        'facebook_url',
        'x_url',
        'linkedin_url',
        'youtube_url',
        'instagram_url',
        'tiktok_url',
    ];
}
