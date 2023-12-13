<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
            'height' => 'required|numeric|min:5|max:255',
            'weight' => 'required|numeric|min:5|max:255',
            'background' => 'required|string|min:5|max:255',
            'image' => 'required|string|min:5|max:255',
            'armor_class' => 'required|numeric|min:10|max:20',
            'str' => 'required|numeric|min:3|max:18',
            'dex' => 'required|numeric|min:3|max:18',
            'con' => 'required|numeric|min:3|max:18',
            'int' => 'required|numeric|min:3|max:18',
            'wis' => 'required|numeric|min:3|max:18',
            'cha' => 'required|numeric|min:3|max:18'

        ];
    }
    public function messagges(): array
    {
        return [

            'name.required' => 'The character name is required.',
            'name.string' => 'The character name must be a string.',
            'name.min' => 'The character name cannot be under :min characters.',
            'name.max' => 'The character name cannot exceed :max characters.',

            'height.required' => 'The character height is required.',
            'height.numeric' => 'The character height must be a number.',
            'height.min' => 'The character height cannot be under :min.',
            'height.max' => 'The character height cannot exceed :max.',

            'weight.required' => 'The character weight is required.',
            'weight.numeric' => 'The character weight must be a number.',
            'weight.min' => 'The character weight cannot be under :min.',
            'weight.max' => 'The character weight cannot exceed :max.',

            'background.required' => 'The character background is required.',
            'background.string' => 'The character background must be a string.',
            'background.min' => 'The character background cannot be under :min characters.',
            'background.max' => 'The character background cannot exceed :max characters.',

            'image.required' => 'The character image is required.',
            'image.string' => 'The character image must be a string.',
            'image.min' => 'The character image cannot be under :min characters.',
            'image.max' => 'The character image cannot exceed :max characters.',

            'armor_class.required' => 'The character armor_class is required.',
            'armor_class.numeric' => 'The character armor class must be a number.',
            'armor_class.min' => 'The character armor_class cannot be under :min.',
            'armor_class.max' => 'The character armor_class cannot exceed :max.',

            'str.required' => 'The character str is required.',
            'str.numeric' => 'The character strength must be a number.',
            'str.min' => 'The character str cannot be under :min.',
            'str.max' => 'The character str cannot exceed :max.',

            'dex.required' => 'The character dex is required.',
            'dex.numeric' => 'The character dexterity must be a number.',
            'dex.min' => 'The character dex cannot be under :min.',
            'dex.max' => 'The character dex cannot exceed :max.',

            'con.required' => 'The character con is required.',
            'con.numeric' => 'The character constitution must be a number.',
            'con.min' => 'The character con cannot be under :min.',
            'con.max' => 'The character con cannot exceed :max.',

            'int.required' => 'The character int is required.',
            'int.numeric' => 'The character intelligence must be a number.',
            'int.min' => 'The character int cannot be under :min.',
            'int.max' => 'The character int cannot exceed :max.',

            'wis.required' => 'The character wis is required.',
            'wis.numeric' => 'The character wisdom must be a number.',
            'wis.min' => 'The character wis cannot be under :min.',
            'wis.max' => 'The character wis cannot exceed :max.',

            'cha.required' => 'The character cha is required.',
            'cha.numeric' => 'The character charisma must be a number.',
            'cha.min' => 'The character cha cannot be under :min.',
            'cha.max' => 'The character cha cannot exceed :max.'

        ];
    }
}
