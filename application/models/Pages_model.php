<?php 

class Pages_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get()
	{

		$query = $this->db->get('pages');

		return $query->result();
	}

	public function new()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', true);

		$data = [
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'slug' => $slug
		];

		return $this->db->insert('pages', $data);
	}
}