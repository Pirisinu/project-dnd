<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RaceRequest extends FormRequest
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

            'name' => 'required|string|min:5|max:50',
            'description' => 'required|text|min:5',
            'mod_str' => 'required|numeric|min:-3|max:3',
            'mod_dex' => 'required|numeric|min:-3|max:3',
            'mod_con' => 'required|numeric|min:-3|max:3',
            'mod_int' => 'required|numeric|min:-3|max:3',
            'mod_wis' => 'required|numeric|min:-3|max:3',
            'mod_cha' => 'required|numeric|min:-3|max:3'

        ];
    }
    public function messagges(): array
    {
        return [

            'name.required' => 'The race name is required.',
            'name.string' => 'The race name must be a string.',
            'name.min' => 'The race name cannot be under :min races.',
            'name.max' => 'The race name cannot exceed :max races.',

            'description.required' => 'The race description is required.',
            'description.text' => 'The race description must be a text.',
            'description.min' => 'The race description cannot be under :min races.',
            'description.max' => 'The race description cannot exceed :max races.',

            'mod_str.required' => 'The race str is required.',
            'mod_str.numeric' => 'The race strength must be a number.',
            'mod_str.min' => 'The race str cannot be under :min.',
            'mod_str.max' => 'The race str cannot exceed :max.',

            'mod_dex.required' => 'The race dex is required.',
            'mod_dex.numeric' => 'The race dexterity must be a number.',
            'mod_dex.min' => 'The race dex cannot be under :min.',
            'mod_dex.max' => 'The race dex cannot exceed :max.',

            'mod_con.required' => 'The race con is required.',
            'mod_con.numeric' => 'The race constitution must be a number.',
            'mod_con.min' => 'The race con cannot be under :min.',
            'mod_con.max' => 'The race con cannot exceed :max.',

            'mod_int.required' => 'The race int is required.',
            'mod_int.numeric' => 'The race intelligence must be a number.',
            'mod_int.min' => 'The race int cannot be under :min.',
            'mod_int.max' => 'The race int cannot exceed :max.',

            'mod_wis.required' => 'The race wis is required.',
            'mod_wis.numeric' => 'The race wisdom must be a number.',
            'mod_wis.min' => 'The race wis cannot be under :min.',
            'mod_wis.max' => 'The race wis cannot exceed :max.',

            'mod_cha.required' => 'The race cha is required.',
            'mod_cha.numeric' => 'The race charisma must be a number.',
            'mod_cha.min' => 'The race cha cannot be under :min.',
            'mod_cha.max' => 'The race cha cannot exceed :max.'

        ];
    }
}
