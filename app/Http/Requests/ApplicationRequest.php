<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            //
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
<<<<<<< HEAD
            'ssn' => 'required|string',
            'phone' => 'required|string',
            'zipcode' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'cv' => 'required|file|mimes:png,jpg, pdf, doc, docx',
=======
            'ssn' => 'required|digits:9',
            'phone' => 'required|string',
            'zipcode' => 'required|digits:6',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'cv' => 'required|file|mimes:png,jpg,pdf,doc,docx',
>>>>>>> master
            'dob' => 'required|date',


            
        ];
    }
}
