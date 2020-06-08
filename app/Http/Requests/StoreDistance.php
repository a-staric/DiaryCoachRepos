<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistance extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $isDistanceId = isset($this->distance) ? $this->distance : null;
        return [
            'name' => 'required|max:150|unique:distances,name,'.$isDistanceId.',id',
            ];
        
    }
    public function attributes()
    {
        return [
            'name' => 'название дистанции',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не может быть пустым!',
            'unique' => 'Поле :attribute должно быть уникальным!',
            'max' => 'Поле :attribute не может быть длиннее 150 символов!',
        ];
    }
}
