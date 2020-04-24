<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use SoftDeletes;
    protected $fillable = [
        'last_name',
        'first_name',
        'dob',
        'height',
        'weight',
        'description',
        'distance_id'
    ];

    public function student_distances()
    {
        return $this->hasMany(StudentDistance::class);
    }

    public function competition_results()
    {
        return $this->hasMany(CompetitionResult::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
