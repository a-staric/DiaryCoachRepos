<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreProgress extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $start_date = Carbon::today()->subYears(120)->toDateString();
        $finish_date = Carbon::today()->addDay()->toDateString();
        
        return [
            'student_id' => 'required',
            'distance_id' => 'required',
            'result_time' => 'required',
            'result_date' => "required|date|after:$start_date|before:$finish_date",
        ];
    }
    public function attributes()
    {
        return [
            'student_id' => 'воспитанник',
            'distance_id' => 'дистанция',
            'result_time' => 'время',
            'result_date' => 'дата',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не может быть пустым!',
            'date' => 'Введите корректную дату!',
            'after' => 'Дата установления рекорда должна быть после :date!',
            'before' => 'Дата установления должна быть до :date!',
        ];
    }
}
