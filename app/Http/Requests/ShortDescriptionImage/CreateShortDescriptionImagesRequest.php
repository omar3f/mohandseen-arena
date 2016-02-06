<?php

namespace App\Http\Requests\ShortDescriptionImage;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CreateShortDescriptionImagesRequest extends Request
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
            'image' => 'required|image',
            'flash' => 'required|boolean',
            'sort' => 'required|numeric'
        ];
    }}
