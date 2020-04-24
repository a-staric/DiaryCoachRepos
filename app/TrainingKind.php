<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingKind extends Model
{
    protected $fillable = [
        'name',
        'discription',
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
