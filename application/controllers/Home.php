<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Makanan',
		];

		$this->load->view('home_vw', $data);
	}

	public function minuman()
	{
		$data['meta'] = [
			'title' => 'Minuman',
		];
		$this->load->view('minuman_vw', $data);
	}

	public function pesanan()
	{
		$data['meta'] = [
			'title' => 'Pesanan',
		];
		$this->load->view('pesanan_vw', $data);
	}
}
