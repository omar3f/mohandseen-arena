<?php

namespace App\Http\Requests\Committee;

use App\Http\Requests\Request;

class CreateEditCommitteeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'sort' => 'required',
            'icon_id' => 'required'
        ];
    }
}
