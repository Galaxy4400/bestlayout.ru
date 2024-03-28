<?php

namespace App\Http\Actions;

class RequestFormFileUpload
{
	public function handle()
	{
		$filePath = null;

		if (request()->hasFile('file')) {
			$filePath = request()->file->storeAs(
				'files/layouts/'.str(request()->name)->slug().'_'.date('Y-m-d'),
				'layout'.uniqid('_').'.'.request()->file->extension()
			);
		}

		return $filePath;
	}
}
