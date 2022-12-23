<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function hutang()
    {
        $this->template->views('report/hutang');
    }
    public function reportMutasiGudang()
    {
        $data['title'] = 'Report Gudang';
        $this->template->views('report/mutasi_gudang', $data);
    }
    public function reportOpname()
    {
        $data['title'] = 'Report Opname';
        $this->template->views('report/opname', $data);
    }
}
