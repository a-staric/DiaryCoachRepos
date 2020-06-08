<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name', 'is_news',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function news()
    {
        return $this->hasOne(News::class);
    }

    public function competition()
    {
        return $this->hasOne(Competition::class);
    }
}
