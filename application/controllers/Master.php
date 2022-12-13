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
        $data['title'] = 'Master Items';
        $this->template->views('master/items', $data);
    }
    public function supplier()
    {
        $data['title'] = 'Master Supplier';
        $this->template->views('master/supplier', $data);
    }
}
