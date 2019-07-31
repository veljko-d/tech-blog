<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class StorePostRequest
 *
 * @package App\Http\Requests
 */
class StorePostRequest extends FormRequest
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
            'title'       => 'required|max:255',
            'content'     => 'required|min:20',
            'source'      => 'max:255',
            'category_id' => 'required|exists:categories,id',
            'tags'        => 'required',
        ];
    }
}
