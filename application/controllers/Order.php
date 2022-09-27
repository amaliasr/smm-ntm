<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function purchaseOrder()
    {
        $this->template->views('order/purchase_order');
    }
    public function transaction()
    {
        $this->template->views('order/transaction');
    }
    public function logistic()
    {
        $this->template->views('order/logistic');
    }
    public function history()
    {
        $this->template->views('order/history');
    }
    public function detailPR($id)
    {
        $data['id'] = $id;
        $this->template->views('order/detailPR', $data);
    }
    public function detailPO($id)
    {
        $data['id'] = $id;
        $this->template->views('order/detailPO', $data);
    }
}
