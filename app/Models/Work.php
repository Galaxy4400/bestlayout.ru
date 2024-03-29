<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'link',
		'description',
		'thumbnail',
		'type',
		'links',
	];


	protected $casts = [
		'links' => 'array',
	];
}
