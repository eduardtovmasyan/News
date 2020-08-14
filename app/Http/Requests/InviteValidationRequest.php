<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InviteValidationRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role' => 'required',
            'email' => 'required|email|unique:users,email',
        ];
    }
}
