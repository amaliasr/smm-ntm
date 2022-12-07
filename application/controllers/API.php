<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
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
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $status = $this->input->get('status');
        $nama = $this->input->get('nama');
        $no_doc = $this->input->get('no_doc');
        $message = "*📝 Permintaan Tanda Tangan 📝*

Hi, *" . $nama . "* anda mendapatkan pesan untuk Tanda Tangan *" . $status . " " . $no_doc . "*
Silahkan klik link dibawah ini untuk melanjutkan proses tanda tangan


" . $link . "";
        $url = 'https://app.whacenter.com/api/send';
        $ch = curl_init($url);
        $data = array(
            'device_id' => '0e49bcaebc1c3b47199003bc2cf07441',
            'number' => $no_telp,
            'message' => $message,
        );
        $payload = $data;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }
}
