<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class LinkRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'alias' => 'required|max:32',
            'title' => 'required|max:60',
            'url' => 'required',
            'expires_in' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'alias.required' => 'Alias is required',
            'title' => 'required|max:60',
            'url' => 'required',
            'expires_in' => 'required'
        ];
    }
}
