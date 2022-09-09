<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
{
	public function index()
	{
		$this->template->views('questions/bank_soal');
	}

	public function addQuestion()
	{
		$this->template->views('questions/add_question');
	}

	public function Bank()
	{
		$this->template->views('questions/bank');
	}

	public function bankDetail()
	{
		$this->template->views('questions/bank_detail');
	}

	public function Modul()
	{
		$this->template->views('questions/modul');
	}
	public function Soal()
	{
		$this->template->views('questions/soal');
	}
	public function Quiz()
	{
		$this->template->views('questions/quiz');
	}
}
