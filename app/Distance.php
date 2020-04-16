<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    protected $fillable = [
        'name',
    ];

    public function student_distances()
    {
        return $this->hasMany(StudentDistance::class);
    }
}
