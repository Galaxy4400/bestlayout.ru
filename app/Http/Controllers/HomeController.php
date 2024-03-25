<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestFormRequest;
use App\Mail\RequestForm;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
	public function homePage()
	{
		return view('welcome');
	}


	public function requestForm(RequestFormRequest $request)
	{
		$filePath = $request->file->store('files/layouts');

		Mail::to("moiseevEO@yandex.ru")->send(new RequestForm($request->validated(), $filePath));

		return redirect()->route('home');
	}
}
