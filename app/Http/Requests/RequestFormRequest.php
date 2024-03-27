<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
			'comment' => ['nullable', 'string'],
			'file' => ['required_if:type,file', 'file'],
			'link' => ['required_if:type,link', 'string'],
			'agreement' => ['required'],
		];
	}


	protected function failedValidation(Validator $validator)
	{
		$response = response()->json([
			'success' => false,
			'errors' => $validator->errors()->messages(),
		], 422);

		throw new HttpResponseException($response);
	}
}
