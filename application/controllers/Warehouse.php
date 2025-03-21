<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warehouse extends CI_Controller
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
        $this->user_id = $this->session->userdata('user_id');
    }
    public function index()
    {
        $this->template->views('warehouse/index');
    }
    public function materialRequest()
    {
        $this->template->views('warehouse/material_request');
    }
    public function history()
    {
        $this->template->views('warehouse/history');
    }
    public function kelolaStok()
    {
        $data['title'] = 'Stok Gudang';
        $this->template->views('warehouse/kelola_stok', $data);
    }
    public function opname()
    {
        $data['title'] = 'Stock Opname';
        $this->template->views('warehouse/opname', $data);
    }
    public function checkingOpname($kode)
    {
        $data['title'] = 'Check Opname';
        $data['kode'] = $kode;
        $this->template->views('warehouse/detail_opname', $data);
    }
    public function koreksiOpname($kode, $id_detail_partisipan = "")
    {
        $data['title'] = 'Koreksi Opname';
        $data['kode'] = $kode;
        $data['id_detail_partisipan'] = $id_detail_partisipan;
        $this->template->views('warehouse/koreksi_opname', $data);
    }
}
