<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CollegeRequest extends FormRequest
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
            "country_id"  =>  "required",
            "state_id" =>  "required",
            "city_id"  => "required",
            "college_name"  =>  "required",
            "short_description" => "required",
            "description" => "required",
            "college_status" => "required",
            "active" => "required"
        ];
    }
}
