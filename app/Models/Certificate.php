<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates';

    protected $fillable = [
        'our_team_id',
        'image',
        'alternative',
    ];

    public function ourTeam()
    {
        return $this->belongsTo(OurTeam::class, 'our_team_id', 'id');
    }
}
