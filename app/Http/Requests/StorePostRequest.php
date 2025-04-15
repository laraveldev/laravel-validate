<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'max:60',
            'age'=> 'numeric|min:18',
            'email'=> 'email',
            'password'=>'confirmed',
            'photo'=>'mimes:jpg,png,jpeg',
            'product'=>'max:100',
            'price'=>'numeric',
            'start_date'=> 'required|date|after:today'
        ];
    }
}
