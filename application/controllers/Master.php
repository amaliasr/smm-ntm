<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function items()
    {
        $data['title'] = 'Master Items';
        $this->template->views('master/items', $data);
    }
    public function supplier()
    {
        $data['title'] = 'Master Supplier';
        $this->template->views('master/supplier', $data);
    }
    public function machine()
    {
        $data['title'] = 'Master Machine';
        $this->template->views('master/machine', $data);
    }
    public function groupMaterial()
    {
        $data['title'] = 'Master Group Material';
        $this->template->views('master/group_material', $data);
    }
    public function convertionMachine($id)
    {
        $data['title'] = 'Convertion Machine';
        $data['machine_id'] = $id;
        $this->template->views('master/convertion_machine', $data);
    }
    public function billOfMaterial()
    {
        $data['title'] = 'Master Bill Of Material';
        $this->template->views('master/billOfMaterial', $data);
    }
    public function wasteGroup()
    {
        $data['title'] = 'Master Waste Group';
        $this->template->views('master/waste_group', $data);
    }
    public function generalLedger()
    {
        $data['title'] = 'Master General Ledger';
        $this->template->views('master/general_ledger', $data);
    }
}
