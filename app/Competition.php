<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name','event_date', 'event_link', 'place', 'description','album_id',
    ];

    public function competition_results()
    {
        return $this->hasMany(CompetitionResult::class);
    }

    public function albums()
    {
        return $this->belongsTo(Album::class);
    }
}
