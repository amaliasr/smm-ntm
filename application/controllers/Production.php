<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            $this->load->helper('cookie');
            $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $name   = 'link';
            $value  = $link;
            $expire = time() + 1000;
            $path  = '/';
            $secure = TRUE;
            setcookie($name, $value, $expire, $path);
            // echo $this->input->cookie('link');
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('id');
        $this->department_id = $this->session->userdata('department_id');
        $this->department_name = $this->session->userdata('department_name');
        $this->full_name = $this->session->userdata('full_name');
        $this->alias = $this->session->userdata('alias');
    }
    public function planning($name)
    {
        if ($name == 'smd') {
            $data['title'] = 'SMD Planning';
        }
        $this->template->views('production/' . $name . '_planning', $data);
    }
    public function createPlanning($name)
    {
        if ($name == 'smd') {
            $data['title'] = 'Create SMD Planning';
        }
        $this->template->views('production/' . $name . '_planning_create', $data);
    }
    public function detailPlanning($name, $id = "")
    {
        $data['id'] = $id;
        if ($name == 'smd') {
            $data['title'] = 'Detail SMD Planning';
        }
        $this->template->views('production/' . $name . '_planning_detail', $data);
    }
    public function draftMaterial()
    {
        $data['title'] = 'Draft Material';
        $this->template->views('production/draft_material', $data);
    }
}
