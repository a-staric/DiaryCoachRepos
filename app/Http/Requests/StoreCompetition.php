<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompetition extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
             'name' => 'required|unique:competitions',
             'place' => 'required',
             'description' => 'required',
             'event_link' => 'required',
             'event_date' => 'required',
        ];
    }
}
