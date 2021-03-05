<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


 class Controller extends BaseController{
	public function index()
	{
		$usuario = [
			'pablo',
			'juan',
			'pedro',
			'alberto',
			];
		return view('usuarios'[
				'usuarios' => $usuario
			]);
	}

}
