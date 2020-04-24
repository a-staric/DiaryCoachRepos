<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'student_id',
        'training_kind_id',
        'plan_date',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function training_kinds()
    {
        return $this->belongsTo(TrainingKind::class);
    }
}
