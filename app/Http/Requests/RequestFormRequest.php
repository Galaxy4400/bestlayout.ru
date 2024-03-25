<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormRequest extends FormRequest
{
	public function authorize(): bool
	{
		return true;
	}


	public function rules(): array
	{
		return [
			'name' => ['required', 'string'],
			'surname' => ['nullable', 'string'],
			'secondname' => ['nullable', 'string'],
			'company' => ['nullable', 'string'],
			'phone' => ['nullable', 'string'],
			'email' => ['required', 'email'],
			'theme' => ['required', 'string'],
			'budget' => ['nullable', 'integer'],
			'message' => ['nullable', 'string'],
			'file' => ['nullable', 'file'],
			'link' => ['nullable', 'string'],
		];
	}
}
