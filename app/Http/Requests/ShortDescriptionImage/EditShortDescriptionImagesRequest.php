<?php

namespace App\Http\Requests\ShortDescriptionImage;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class EditShortDescriptionImagesRequest extends Request
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
        return [
            'flash' => 'required|boolean',
            'sort' => 'required|numeric'
        ];
    }
}
