<?php

class Pages extends CI_Controller
{
	public function index()
	{
		$this->load->model('pages_model');

		$pages = $this->pages_model->get();


		$this->load->view('template/header');
		$this->load->view('pages/index', ['pages' => $pages]);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		echo 'Pages::view('.$id.')';
	}
}