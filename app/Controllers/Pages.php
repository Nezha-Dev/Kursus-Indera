<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data =[
			'title' => 'Home | LPK-LKP INDERA'
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data =[
			'title' => 'About | LPK-LKP INDERA'
		];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data =[
			'title' => 'Contact | LPK-LKP INDERA'
		];
		return view('pages/contact', $data);
	}
}
