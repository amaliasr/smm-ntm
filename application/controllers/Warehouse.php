<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warehouse extends CI_Controller
{
    public function index()
    {
        $this->template->views('warehouse/index');
    }
}
