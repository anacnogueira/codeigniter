<?php 

class Pages_model extends CI_Model
{
	public function get()
	{

		$this->load->database();
		$query = $this->db->get('pages');

		return $query->result();
	}
}