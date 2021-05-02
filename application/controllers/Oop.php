<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Oop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Index_model');

	}

	public function index()
	{
		$data = array(
			'konten' => $this->Index_model->get_data()
		);
		$this->load->view('cetak_model', $data);
	}
}