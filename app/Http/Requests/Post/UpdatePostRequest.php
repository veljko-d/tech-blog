<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class UpdatePostRequest
 *
 * @package App\Http\Requests
 */
class UpdatePostRequest extends FormRequest
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
            'title'       => 'max:255',
            'content'     => 'min:20',
            'source'      => 'max:255',
            'category_id' => 'exists:categories,id',
            'tags'        => '',
        ];
    }
}
