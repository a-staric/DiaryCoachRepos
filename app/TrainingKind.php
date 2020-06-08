<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingKind extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
