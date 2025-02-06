<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;

    protected $table = 'our_team';

    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'position_az',
        'position_en',
        'position_ru',
        'image',
        'about_az',
        'about_en',
        'about_ru',
        'slug_az',
        'slug_en',
        'slug_ru',
    ];

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'our_team_id', 'id');
    }
}
