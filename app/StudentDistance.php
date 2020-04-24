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

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function distances()
    {
        return $this->belongsTo(Distance::class);
    }
}
