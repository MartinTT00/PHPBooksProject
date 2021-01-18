<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:100',
            'age' => 'required|min:1|max:3',
            'countOfBooks' => 'required|min:1|max:4',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
                'name.required' => 'Please provide valid name!',
                'name.min' => 'Plese provide valid name  which is between 4 and 100 characters.',
                'age.required' => 'You should provide valid age.',
                'countOfBooks.unique' => 'Enter how many books the author has.',
        ];
    }
}
