<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        $roleId=$this->route('role');
        return [
            'title'=>'required|unique:roles,title,'.$roleId,
            'name'=>'required|unique:roles,title,'.$roleId
        ];
    }
    public function messages()
    {
        return[
            'title.required'=>'角色名称不能为空',
            'title.unique'=>'角色名称不能重复',
            'name.required'=>'角色标识不能为空',
            'name.unique'=>'角色标识不能重复',

        ];
    }
}
