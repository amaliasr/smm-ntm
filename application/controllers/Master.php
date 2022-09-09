<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	public function index()
	{
		print_r("halaman master > index");
	}

	public function scheduleTest()
	{
		$this->template->views('masters/schedule_test');
	}

	public function employee()
	{
		$this->template->views('masters/employee');
	}

	public function navigationMenu()
	{
		$this->template->views('masters/navigation_menu');
	}
}
