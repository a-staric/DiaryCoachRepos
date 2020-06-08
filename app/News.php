<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'news_date',
        'album_id',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
