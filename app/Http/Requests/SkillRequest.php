<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
            "name" => "required|min:2|max:100",
            "description" => "required|min:3",
            "peculiar_characteristic" => "required"
        ];
    }

    public function messages(){
        return [
            "name.required" => 'Devi inserire il nome della skill',
            "name.min" => 'La skill deve avere almeno :min caratteri',
            "name.max" => 'La skill non può avere più di :max caratteri',
            "description.required" => 'La descrizione deve essere presente',
            "description.min" =>  'La descrizione deve avere almeno :min caratteri',
            "peculiar_characteristic.required" =>  'La caratteristica peculiare deve essere inserita'
        ];
    }
}
