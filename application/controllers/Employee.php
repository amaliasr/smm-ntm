<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function index()
    {
        $this->template->views('employee/index');
    }

    public function list()
    {
        $this->template->views('employee/list');
    }

    public function manage()
    {
        $this->template->views('employee/manage');
    }
}
