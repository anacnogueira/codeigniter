<?php 
class AuthHook
{
	private $controler = [
		'auth'
	];

	public function check()
	{
		$CI =& get_instance();

		if(!isset($CI->session)) {
			$CI->load->library('session');
		}

		$CI->load->helper('url');

		$user = $CI->session->user ?? null;
		$controller = $CI->uri->segment(1);

		if (!$user and !in_array($controller, $this->controller)) {
			redirect('auth/login', 'location', 302);
			die();
		}
	}
}
