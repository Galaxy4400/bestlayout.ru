<?php

namespace App\Http\Controllers;

use App\Http\Actions\RequestFormFileUpload;
use App\Http\Requests\RequestFormRequest;
use App\Mail\RequestForm;
use App\Models\Work;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
	public function homePage()
	{
		$works = Work::all();

		return view('welcome', compact('works'));
	}


	public function requestForm(RequestFormRequest $request, RequestFormFileUpload $uploadFileAction)
	{
		Mail::to("bestlayout@yandex.ru")->send(new RequestForm($request->validated(), $uploadFileAction->handle()));

		return response()->json(['success' => true]);
	}
}
