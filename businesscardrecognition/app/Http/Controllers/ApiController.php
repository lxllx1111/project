<?php
namespace App\Http\Controllers;
use App\Http\Response\ResponseJson;

class ApiController extends Controller
{
	use ResponseJson;
	public function index()
	{
		return view('api/index');
	}
}