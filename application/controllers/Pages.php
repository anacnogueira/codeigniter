<?php

class Pages extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
	}

	public function view($id)
	{
		echo 'Pages::view('.$id.')';
	}
}