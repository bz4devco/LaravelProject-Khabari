<?php

namespace App\Http\Requests\Admin\User;

use App\Rules\NationalCode;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
        if($this->isMethod('post')){
            return [
                'first_name' => 'required|min:1|max:120|regex:/^[آ-یa-zA-Zء-ئ ]+$/u',
                'last_name' => 'required|min:1|max:120|regex:/^[آ-یa-zA-Zء-ئ ]+$/u',
                'mobile' => 'required|digits:11|unique:users|regex:/^(\+98?)?{?(09[0-9]{9,9}}?)$/u',
                'email' => 'required|string|email|unique:users|regex:/^\S+@\S+\.\S+$/u',
                'password' => ['required', 'unique:users', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(), 'confirmed'],
                'national_code' => ['required', 'digits:10', 'numeric', new NationalCode(), Rule::unique('users')->ignore($this->user()->national_code, 'national_code')],
                'avatar' => 'nullable|image|mimes:png,jpg,jpeg,gif,ico,svg,webp',
                'status' => 'required|numeric|in:0,1',
            ];
        }else{
            return [
                'first_name' => 'required|min:1|max:120|regex:/^[آ-یa-zA-Zء-ئ ]+$/u',
                'last_name' => 'required|min:1|max:120|regex:/^[آ-یa-zA-Zء-ئ ]+$/u',
                'avatar' => 'nullable|image|mimes:png,jpg,jpeg,gif,ico,svg,webp',
                'status' => 'required|numeric|in:0,1',
            ];
        }
    }
}
