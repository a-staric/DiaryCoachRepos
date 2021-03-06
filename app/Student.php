<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'last_name',
        'first_name',
        'dob',
        'height',
        'weight',
        'description',
        'distance_id',
        'image_path',
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
