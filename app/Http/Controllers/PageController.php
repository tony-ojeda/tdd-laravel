<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home()
	{
		return view('home.index', [
			'repositories' => Repository::latest()->get(),
		]);
	}
}
