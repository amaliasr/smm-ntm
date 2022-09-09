<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if (is_login()) {
			redirect('Home');
		}
		$this->template->views('auths/login', null, true);
	}

	public function setSessions()
	{
		$token = $this->input->post('token');
		$user = $this->input->post('user');

		$this->session->set_userdata('logged_in', true);
		$this->session->set_userdata('token', $token);
		foreach ($user as $key => $value) {
			$this->session->set_userdata($key, $value);
		}

		$response['success'] = true;
		echo json_encode($response);
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
		redirect('Auth', 'refresh');
	}
}
