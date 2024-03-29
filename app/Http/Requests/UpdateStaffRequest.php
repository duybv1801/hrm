<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
        $id = $this->route('user');
        $rules = [
          'name'     => 'required',
          'email'    => 'required|email|unique:users,email,'.$id,
          'code'    => 'required|unique:users,code,'.$id,
          'password' => 'confirmed'
        ];
        
        return $rules;
    }
}
