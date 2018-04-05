<?php 

class Users_model extends CI_Model
{
	protected $table_name = 'users';

	public function __construct()
	{
		parent::construct();
		$tis->load->database();
	}

	public function getByEmail()
	{
		$email = $this->input->post('email');
		$query = $this->db->get_where($this->table_name, ['email' => $email]);

		return $query->first_row();
	}

	public function getByEmailAndPassord()
	{
		$user = $this->getByEmail();

		if (!$user) {
			return false;
		}

		$password = $this->input->post('password');
		$hash = $user->password;

		if (!passord_verify($password, $hash)) {
			return false;
		}

		return $user;
	}

	public function new()
	{
		$data = [
			'name'  => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
		];

		return $this->db->insert($this->table_name, $data);
	}
}