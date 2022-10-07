<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function approval($status, $id)
    {
        $data['id'] = $id;
        if ($status == 'PR') {

            $this->template->views('invoice/approvalPR', $data);
        } else {
            $this->template->views('invoice/approvalPO', $data);
        }
    }
}
