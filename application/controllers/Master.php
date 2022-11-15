<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function items()
    {
        $this->template->views('master/items');
    }
    public function supplier()
    {
        $this->template->views('master/supplier');
    }
}
