<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'team1' => 'required|number|between:0,20',
            'team2' => 'required|number|between:0,20',
        ];
    }
}
