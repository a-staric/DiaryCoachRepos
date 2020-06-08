<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StorePlan extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $start_date = Carbon::today()->subYears(120)->toDateString();
        $finish_date = Carbon::today()->addDay(120)->toDateString();


        return [
            'student_id' => 'required',
            'training_kind_id' => 'required',
            'plan_date' => "required|date|after:$start_date|before:$finish_date",
        ];
    }
    public function attributes()
    {
        return [
            'student_id' => 'воспитанник',
            'training_kind_id' => 'название задания',
            'plan_date' => 'дата плана',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не может быть пустым!',
            'date' => 'Введите корректную дату!',
            'after' => 'Дата плана должна быть после :date!',
            'before' => 'Дата плана должна быть до :date!',
        ];
    }
}
