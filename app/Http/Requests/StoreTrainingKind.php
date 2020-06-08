<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingKind extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $isTrainingKindId = isset($this->trainingkind) ? $this->trainingkind : null;
        return [
            'name' => 'required|max:150|unique:training_kinds,name,'.$isTrainingKindId.',id',
            'description' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'название задания',
            'description' => 'описание',
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
