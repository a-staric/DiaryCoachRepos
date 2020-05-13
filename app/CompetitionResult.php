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
        
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function distances()
    {
        return $this->belongsTo(Distance::class);
    }

    public function competitions()
    {
        return $this->belongsTo(Competition::class);
    }
}
