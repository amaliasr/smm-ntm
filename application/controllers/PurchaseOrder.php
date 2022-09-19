<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PurchaseOrder extends CI_Controller
{
    public function index()
    {
        $this->template->views('purchase_order/index');
    }
    public function materialRequest()
    {
        $this->template->views('purchase_order/material_request');
    }
    public function history()
    {
        $this->template->views('purchase_order/history');
    }
}
