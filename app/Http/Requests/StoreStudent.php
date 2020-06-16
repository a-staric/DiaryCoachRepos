<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Carbon\Carbon;

class StoreStudent extends FormRequest
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
        $finish_date = Carbon::today()->subYears(5)->toDateString();

        return [
            'last_name' => 'required|max:100|alpha',
            'first_name' => 'required|max:100|alpha',
            'dob' => "required|date|after:$start_date|before:$finish_date",
            'height' => 'required|integer|between:50,300',
            'weight'=> 'required|integer|between:15,300',
            'description' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102048'
        ];
    }

    public function attributes()
    {
        return [
            'last_name' => 'фамилия',
            'first_name' => 'имя',
            'dob' => 'дата рождения',
            'height' => 'рост',
            'weight' => 'вес',
            'description' => 'краткое описание',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не может быть пустым!',
            'integer' => 'Поле :attribute может принимать только целые значения!',
            'between' => 'Поле :attribute введите из промежутка :min - :max!',
            'max' => 'Поле :attribute не может быть длиннее 100 символов!',
            'date' => 'Введите корректную дату!',
            'alpha' => 'Поле :attribute должно быть полностью заполнено символами!',
            'after' => 'Дата рождения должна быть после :date!',
            'before' => 'Дата рождения должна быть до :date!',

        ];
    }
}
