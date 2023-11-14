<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

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
        if (if_smd_planning()) {
            $this->template->views('production/' . $name . '_planning', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
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
        if (if_create_smd_planning()) {
            $this->template->views('production/' . $name . '_planning_create', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
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
        if (if_draft_material()) {
            $this->template->views('production/draft_material', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
    }
    public function materialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Material Request';
        if (if_material_request()) {
            $this->template->views('production/material_request', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
    }
    public function createMaterialRequest($id = "")
    {
        $data['id'] = $id;
        $data['title'] = 'Create Material Request';
        if (if_create_material_request()) {
            $this->template->views('production/material_request_create', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
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
        if (if_manage_material_request()) {
            $this->template->views('production/material_request_management', $data);
        } else {
            $this->template->views('errors/notfound', $data);
        }
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
    public function productionPortals()
    {
        $data['title'] = 'Production Portals';
        if (job_foreman()) {
            $this->template->views('production/production_portals', $data);
        } else {
            $this->template->views('production/production_portals_manpower', $data);
        }
    }
    public function workPlan($id)
    {
        $data['title'] = 'Work Plan';
        $data['id'] = $id;
        $this->template->views('production/work_plan', $data);
    }
    public function productionEntry($linkBefore = null, $workPlanMachineId = null, $label = null)
    {
        $data['title'] = 'Production Entry';
        $data['workPlanMachineId'] = base64_decode($workPlanMachineId);
        $data['label'] = base64_decode($label);
        $dataAPI = json_decode($this->curl->simple_get(api_produksi('loadPageProductionEntry?personLabel=' . base64_decode($label) . '&workPlanMachineId=' . base64_decode($workPlanMachineId))))->data;
        $data['linkBefore'] = $linkBefore;
        if ($linkBefore) {
            $data['link'] = $linkBefore;
        } else {
            $data['link'] = 'default';
        }
        $menu = $dataAPI->ProductionEntryAccess;
        $data['menu'] = $menu;
        $data['datas'] = $dataAPI;
        $data['dataAPI'] = json_encode($dataAPI);
        // $this->template->views('errors/notfound', $data);
        $this->template->views('production/template_production_entry', $data);
    }
    public function machineShelters()
    {
        $data['title'] = 'Machine Shelters';
        $this->template->views('production/machine_shelters', $data);
    }
    public function stockOpnameProduction()
    {
        $data['title'] = 'Stock Opname Production';
        $this->template->views('production/stock_opname_production', $data);
    }
    public function microWarehouse()
    {
        $data['title'] = 'Micro Warehouse';
        $this->template->views('production/micro_warehouse', $data);
    }
    public function sktPortal()
    {
        $data['title'] = 'SKT Portaks';
        $this->template->views('production/skt_portal', $data);
    }
    public function cetakWorkPlan()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['plan_id'] = $explodedParams[1];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('loadPageWorkPlanManage?productionPlanId=' . $data['plan_id'] . '&employeeId=' . $this->session->userdata('employee_id'))))->data;
        $html = $this->load->view('production/cetak_work_plan', $data, true);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "WORK PLAN " . $data['datas']->productionPlan->code . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream("WORK PLAN " . $data['datas']->productionPlan->code, array("Attachment" => 0));
    }
    public function exportStockOpnameProduction()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $typeFilter = (explode(',', $explodedParams[1]));
        // print_r($typeFilter);
        $textId = '';
        $a = 2;
        foreach ($typeFilter as $k => $v) {
            $dataId = (explode(',', $explodedParams[$a++]));
            foreach ($dataId as $key => $value) {
                $textId .= strtolower($v) . 'Id%5B%5D=' . $value . '&';
            }
        }
        $date_start = date('Y-m-d', strtotime($explodedParams[$a++]));
        $date_end = date('Y-m-d', strtotime($explodedParams[$a++]));
        $statusSplit = $explodedParams[$a++];
        $url = "getProductionLineStock?" . $textId . "dateStart=" . $date_start . "&dateEnd=" . $date_end . "";
        $main = json_decode(file_get_contents(api_produksi($url)), true);
        $body = $main['data'];
        $spreadsheet = new Spreadsheet();
        foreach ($body['machineStock'] as $key => $value) {
            if ($key == 0) {
                $worksheet[] = $spreadsheet->getActiveSheet()->setTitle($value['name']);
            } else {
                $worksheet[] = $spreadsheet->createSheet()->setTitle($value['name']);
            }
        }
        // $sheet = $spreadsheet->getActiveSheet();
        for ($i = 0; $i < count($worksheet); $i++) {
            if ($statusSplit == 'merged') {
                $worksheet[$i]->mergeCells('A1:A2')->setCellValue('A1', 'No');
                $worksheet[$i]->mergeCells('B1:B2')->setCellValue('B1', 'Item');
                $worksheet[$i]->mergeCells('C1:C2')->setCellValue('C1', 'ID Material');
                $worksheet[$i]->mergeCells('D1:D2')->setCellValue('D1', 'Machine');
                $worksheet[$i]->mergeCells('E1:E2')->setCellValue('E1', 'Unit');
                $worksheet[$i]->mergeCells('F1:F2')->setCellValue('F1', 'Saldo Awal');
            } else {
                $worksheet[$i]->setCellValue('A2', 'No');
                $worksheet[$i]->setCellValue('B2', 'Item');
                $worksheet[$i]->setCellValue('C2', 'ID Material');
                $worksheet[$i]->setCellValue('D2', 'Machine');
                $worksheet[$i]->setCellValue('E2', 'Unit');
                $worksheet[$i]->setCellValue('F2', 'Saldo Awal');
            }
            $hurufMergeAwal = 6;
            $hurufMergeAkhir = 6;
            $hurufTerakhir = 7;
            $hurufTerakhirSplit = 7;
            foreach ($body['machineStock'][0]['data'][0]['data'] as $key => $value) {
                if ($statusSplit == 'merged') {
                    $hurufMergeAkhir  = $hurufMergeAwal + 5;
                    $hurufMergeAwal  = $hurufMergeAwal + 1;
                    $worksheet[$i]->mergeCells(Coordinate::stringFromColumnIndex($hurufMergeAwal) . '1:' . Coordinate::stringFromColumnIndex($hurufMergeAkhir) . '1')->setCellValue(Coordinate::stringFromColumnIndex($hurufMergeAwal) . '1', $value['tanggal']);
                    $hurufMergeAwal = $hurufMergeAkhir;
                } else {
                    for ($k = 0; $k < 5; $k++) {
                        $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhirSplit++) . '1', $value['tanggal']);
                    }
                }
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . '2', 'IN');
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . '2', 'OUT');
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . '2', 'NETT');
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . '2', 'WASTE');
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . '2', 'GROSS');
            }
            $hurufMergeAwal++;
            if ($statusSplit == 'merged') {
                $worksheet[$i]->mergeCells(Coordinate::stringFromColumnIndex($hurufMergeAwal) . '1:' . Coordinate::stringFromColumnIndex($hurufMergeAwal) . '2')->setCellValue(Coordinate::stringFromColumnIndex($hurufMergeAwal) . '1', 'Saldo Akhir');
            } else {
                $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhirSplit) . '2', 'Saldo Akhir');
            }
            $rowCount = 3;
            $number = 1;
            foreach ($body['machineStock'] as $key => $value) {
                if ($key == $i) {
                    foreach ($value['data'] as $key2 => $value2) {
                        $hurufTerakhir = 7;
                        $worksheet[$i]->setCellValue('A' . $rowCount, $number++);
                        $worksheet[$i]->setCellValue('B' . $rowCount, $value2['item']['name']);
                        $worksheet[$i]->setCellValue('C' . $rowCount, $value2['item']['code']);
                        $worksheet[$i]->setCellValue('D' . $rowCount, $value2['machine']['code']);
                        $worksheet[$i]->setCellValue('E' . $rowCount, $value2['unit']['name']);
                        $worksheet[$i]->setCellValue('F' . $rowCount, $value2['saldo_awal']);
                        foreach ($value2['data'] as $key3 => $value3) {
                            $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . $rowCount, $value3['in']);
                            $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . $rowCount, $value3['out']);
                            $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . $rowCount, $value3['nett']);
                            $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . $rowCount, $value3['waste']);
                            $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir++) . $rowCount, $value3['gross']);
                        }
                        $worksheet[$i]->setCellValue(Coordinate::stringFromColumnIndex($hurufTerakhir) . $rowCount, $value2['saldo_akhir']);
                        $rowCount++;
                    }
                }
            }
            $styleArray = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'wrapText' => true,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'FFB100',
                    ],
                    'endColor' => [
                        'argb' => 'FFB100',
                    ],
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '383838'],
                    ],
                ],
            ];
            $worksheet[$i]->getStyle('A1:' . Coordinate::stringFromColumnIndex($hurufTerakhir) . '1')->applyFromArray($styleArray);
            $worksheet[$i]->getStyle('A2:' . Coordinate::stringFromColumnIndex($hurufTerakhir) . '2')->applyFromArray($styleArray);
            $worksheet[$i]->getStyle('G2:' . Coordinate::stringFromColumnIndex($hurufTerakhir) . '2')->applyFromArray($styleArray);
            $worksheet[$i]->getColumnDimension('A')->setAutoSize(true);
            $worksheet[$i]->getColumnDimension('B')->setWidth(70);
            $worksheet[$i]->getColumnDimension('C')->setAutoSize(true);
            $worksheet[$i]->getColumnDimension('D')->setAutoSize(true);
            $worksheet[$i]->freezePane('F3');
        }


        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);
        $writer = new Xlsx($spreadsheet);
        $filename = 'SO PRODUKSI ' . $epoch;
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
}
