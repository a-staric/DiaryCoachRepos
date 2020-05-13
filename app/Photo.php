<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path',
        'album_id',
    ];

    public function albums()
    {
        return $this->belongsTo(Album::class);
    }
}
