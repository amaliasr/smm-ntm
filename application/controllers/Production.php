<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production extends CI_Controller
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
        $this->user_id = $this->session->userdata('id');
        $this->department_id = $this->session->userdata('department_id');
        $this->department_name = $this->session->userdata('department_name');
        $this->full_name = $this->session->userdata('full_name');
        $this->alias = $this->session->userdata('alias');
    }
    public function planning($name)
    {
        if ($name == 'smd') {
            $data['title'] = 'SMD Planning';
        }
        $this->template->views('production/' . $name . '_planning', $data);
    }
    public function createPlanning($name, $type = '', $id_plan = '')
    {
        if ($name == 'smd') {
            $data['title'] = 'Create SMD Planning';
            $data['head_title'] = 'Create SMD Planning';
        }
        if ($id_plan != '') {
            $data['title'] = 'Edit SMD Planning';
            $data['head_title'] = 'Edit SMD Planning';
        }
        $data['id_plan'] = $id_plan;
        $data['type'] = $type;
        $this->template->views('production/' . $name . '_planning_create', $data);
    }
    public function detailPlanning($name, $id = "")
    {
        $data['id'] = $id;
        if ($name == 'smd') {
            $data['title'] = 'Detail SMD Planning';
        }
        $this->template->views('production/' . $name . '_planning_detail', $data);
    }
    public function draftMaterial($id)
    {
        $data['id'] = $id;
        $data['title'] = 'Draft Material';
        $this->template->views('production/draft_material', $data);
    }
    public function materialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Material Request';
        $this->template->views('production/material_request', $data);
    }
    public function createMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Create Material Request';
        $this->template->views('production/material_request_create', $data);
    }
    public function approvalMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Approval Material Request';
        $this->template->views('production/material_request_approval', $data);
    }
    public function editMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Edit Material Request';
        $this->template->views('production/material_request_edit', $data);
    }
    public function receiveMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Receive Material Request';
        $this->template->views('production/material_request_receive', $data);
    }
    public function managementMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Management Material Request';
        $this->template->views('production/material_request_management', $data);
    }
    public function managementWarehouse($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Management Warehouse';
        $this->template->views('production/warehouse_management', $data);
    }
    public function cetakMaterialRequest()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['qrcode'] = $explodedParams[1];
        $data['id'] = $explodedParams[2];
        $data['user_id'] = $explodedParams[3];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getMaterialRequestPrint?id=' . $data['id'] . '&employeeId=' . $data['user_id'])))->data;
        $html = $this->load->view('production/cetak_material_request', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = 'MATERIAL REQUEST ' . $data['datas']->materialRequest[0]->code . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream($data['datas']->materialRequest[0]->code, array("Attachment" => 0));
    }
    public function cetakSMDPlanning()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['qrcode'] = $explodedParams[1];
        $data['id'] = $explodedParams[2];
        $data['user_id'] = $explodedParams[3];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getProductionPlanSmdDetail?id=' . $data['id'] . '&employeeId=' . $data['user_id'])))->data;
        $html = $this->load->view('production/cetak_smd_planning', $data, true);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = 'SMD PLAN ' . $data['datas']->data[0]->code . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream($data['datas']->data[0]->code, array("Attachment" => 0));
    }
    public function managementTSG($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Management TSG';
        $this->template->views('production/tsg_management', $data);
    }
    public function workforceProductivity()
    {
        $data['title'] = 'Workforce Productivity';
        $this->template->views('production/workforce_productivity', $data);
    }
    public function managementProduction()
    {
        $data['title'] = 'Management Production';
        $this->template->views('production/management_production', $data);
    }
    public function workPlan()
    {
        $data['title'] = 'Work Plan';
        $this->template->views('production/work_plan', $data);
    }
}
