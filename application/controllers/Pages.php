<?php

class Pages extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('pages_model');
	}

	public function index()
	{

		$pages = $this->pages_model->get();

		$this->load->view('template/header');
		$this->load->view('pages/index', ['pages' => $pages]);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		$page = $this->pages_model->get($id);
		$this->load->view('template/header');
		$this->load->view('pages/view', ['page' => $page]);
		$this->load->view('template/footer');
	}

	public function new()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Título', 'required');
		$this->form_validation->set_rules('body', 'Conteúdo', 'required');

		if (!$this->form_validation->run()) {
			$this->load->view('template/header');
			$this->load->view('pages/new');
			$this->load->view('template/footer');
		} else {
			$data['back'] = '/pages';
			 $this->pages_model->new();
			 $this->load->view('template/success', $data);
		}
	}

	public function edit($id = null)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Título', 'required');
		$this->form_validation->set_rules('body', 'Conteúdo', 'required');

		if (!$this->form_validation->run()) {
			$page = $this->pages_model->get($id);

			$this->load->view('template/header');
			$this->load->view('pages/edit', ['page' => $page]);
			$this->load->view('template/footer');
		} else {
			$data['back'] = '/pages/' . $id;
			$this->pages_model->update($id);
			$this->load->view('template/success', $data);
		}
	}

	public function delete($id)
	{
		$data['back'] = '/pages/' . $id;
	 	$this->pages_model->delete($id);
	 	$this->load->view('template/success', $data);
	}
}