<?php

namespace App\Http\Requests\CheckOut;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'town' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];
    }
}
