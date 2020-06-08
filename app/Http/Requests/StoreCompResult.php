<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompResult extends FormRequest
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
        return [
            // 'name' => 'required|unique:competitions',
            'student_id' => 'required',
            'distance_id' => 'required',
            'competition_id' => 'required',
            'result_time' => 'required',
            'place' => 'required|integer|between:1,300',
       ];
    }
}
