<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionResult extends Model
{
    protected $fillable = [
        'student_id',
        'distance_id',
        'result_time',
        'competition_id',
        'place',

    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function distance()
    {
        return $this->belongsTo(Distance::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
