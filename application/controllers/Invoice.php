<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function approval($status, $id)
    {
        $data['title'] = 'Invoice ' . $status;
        $data['id'] = $id;
        if ($status == 'PR') {
            $this->template->views('invoice/approvalPR', $data);
        } else {
            $this->template->views('invoice/approvalPO', $data);
        }
    }
}
