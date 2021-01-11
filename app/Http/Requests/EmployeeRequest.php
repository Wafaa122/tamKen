<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|max:50',
            'department_id'=>'required',
            'city_id'=>'required|max:50',
            'imgEmp'=>'required|image',
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],
            'active' => [
                'required',
                Rule::in(['1', '0']),
            ],

        ];
    }
}
