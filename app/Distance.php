<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distance extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];

    public function student_distances()
    {
        return $this->hasMany(StudentDistance::class);
    }

    public function competition_results()
    {
        return $this->hasMany(CompetitionResult::class);
    }
}
