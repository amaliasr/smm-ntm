<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!is_login()) {
			redirect('Auth');
		}
		$this->user_id = $this->session->userdata('id');
		$this->department_id = $this->session->userdata('department_id');
		$this->department_name = $this->session->userdata('department_name');
		$this->full_name = $this->session->userdata('full_name');
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['full_name'] = $this->full_name;
		$this->template->views('index', $data);
	}
}
