<?php

namespace App\Http\Requests\Admin\Products;

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
            'subcategory_id' => 'required|string',
            'brand' => 'required|string',
            'title' => 'required|string',
            'price' => 'required|string',
            'old_price' => 'nullable|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            's' => 'nullable|string',
            'm' => 'nullable|string',
            'x' => 'nullable|string',
            'xl' => 'nullable|string',
            'preview_image' => 'required|file',
            'second_image' => 'required|file',
            'third_image' => 'required|file',

        ];
    }
}
