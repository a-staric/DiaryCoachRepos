<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompetition extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $start_date = Carbon::today()->subYears(120)->toDateString();
        $finish_date = Carbon::today()->addDay(365)->toDateString();
        // $isCompId = isset($this->trainingkind) ? $this->trainingkind : null;
        // dd($this->competition);
        return [
             'name' => 'required|max:150|unique:competitions',
             'place' => 'required|max:200',
             'description' => 'required',
             'event_link' => 'nullable|url',
             'event_date' => "required|date|after:$start_date|before:$finish_date",
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'название',
            'place' => 'место проведения',
            'description' => 'краткое описание',
            'event_link' => 'ссылка на источник',
            'event_date' => 'дата проведения',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не может быть пустым!',
            'date' => 'Введите корректную дату!',
            'max' => 'Поле :attribute не может быть длиннее :max символов!',
            'after' => 'Дата плана должна быть после :date!',
            'before' => 'Дата плана должна быть до :date!',
            'url' => 'Ссылка на источник имеет недопустимый формат!'
        ];
    }
}
