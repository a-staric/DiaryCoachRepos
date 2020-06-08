<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDistance extends Model
{
    protected $fillable = [
        'student_id',
        'distance_id',
        'result_time',
        'result_date'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function distance()
    {
        return $this->belongsTo(Distance::class);
    }
}
