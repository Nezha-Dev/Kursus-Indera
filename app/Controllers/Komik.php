<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
	protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}
    public function index()
    {    
		$data = [
			'title' => 'Komik | LPK-LKP INDERA',
			'komik' => $this->komikModel->getKomik()
		];

		// $komikModel = new \App\Models\KomikModel();
		// $komikModel = new KomikModel();

		return view('komik/index', $data);
	}
	public function detail($slug)
	{
		$data = [
			'title' => 'Detail | LPK-LKP INDERA',
			'komik' => $this->komikModel->getKomik($slug)
		];
		return view('komik/detail', $data);
	}
}