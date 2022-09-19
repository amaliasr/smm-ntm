<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function items()
    {
        $this->template->views('master/items');
    }
    public function supplier()
    {
        $this->template->views('master/supplier');
    }
}
