<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNews extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:news,title,'.$this->news,
            'description' => 'required',
            'news_date' => 'required',
        ];
    }
}
