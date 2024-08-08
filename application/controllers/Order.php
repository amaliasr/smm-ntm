<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
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
    public function purchaseOrder()
    {
        $data['title'] = 'Request & Order';
        $this->template->views('order/purchase_order', $data);
    }
    public function managePR()
    {
        $data['title'] = 'PR - Purchase Requisition';
        $this->template->views('order/manage_pr', $data);
    }
    public function managePO()
    {
        $data['title'] = 'PO - Purchase Order';
        $this->template->views('order/manage_po', $data);
    }
    public function addNewPR($id = '')
    {
        $data['title'] = 'Add New PR';
        $data['id'] = $id;
        $this->template->views('order/add_new_pr', $data);
    }
    public function addNewPO($idPr = '', $id = '')
    {
        $data['title'] = 'Add New PO';
        if ($idPr == 'default') {
            $idPr = '';
        }
        $data['idPr'] = $idPr;
        $data['id'] = $id;
        $this->template->views('order/add_new_po', $data);
    }
    public function transactionSuratJalan()
    {
        $data['title'] = 'Tracking Surat Jalan';
        $this->template->views('order/transaction_sj', $data);
    }
    public function transaction()
    {
        $data['title'] = 'Transaction';
        $this->template->views('order/transaction', $data);
    }
    public function logistic()
    {
        $data['title'] = 'Logistic';
        $this->template->views('order/logistic', $data);
    }
    public function logisticNew()
    {
        $data['title'] = 'Logistic';
        $this->template->views('order/logistic_new', $data);
    }
    public function payments()
    {
        $data['title'] = 'Payments';
        $this->template->views('order/payments', $data);
    }
    public function po_payments()
    {
        $data['title'] = 'PO Payments';
        $this->template->views('order/po_payments', $data);
    }
    public function detailPR($id)
    {
        $data['title'] = 'Detail PR';
        $data['id'] = $id;
        $this->template->views('order/detailPR', $data);
    }
    public function detailPO($id)
    {
        $data['title'] = 'Detail PO';
        $data['id'] = $id;
        $this->template->views('order/detailPO', $data);
    }
    public function cetakPR()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['qrcode'] = $explodedParams[1];
        $data['id'] = $explodedParams[2];
        $data['user_id'] = $explodedParams[3];
        $data['datas'] = json_decode($this->curl->simple_get(api_url('Api_Warehouse/getDataPR?id=' . $data['id'] . '&user_id=' . $data['user_id'])))->data[0];
        $data['detail'] = json_decode($data['datas']->data_detail);
        $html = $this->load->view('order/cetakPR', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['datas']->no_pr . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        // // Instantiate canvas instance 
        // $canvas = $this->pdf->getCanvas();
        // $w = $canvas->get_width();
        // $h = $canvas->get_height();
        // $imageURL = base_url() . 'assets/image/logo/SMMtrans.png';
        // $imgWidth = 250;
        // $imgHeight = 250;
        // $canvas->set_opacity(.2);
        // // Specify horizontal and vertical position 
        // $x = (($w - $imgWidth) / 2);
        // $y = (($h - $imgHeight) / 3);
        // $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight, $resolution = "normal");
        $this->pdf->stream($data['datas']->no_pr, array("Attachment" => 0));
    }
    public function cetakPO()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['qrcode'] = $explodedParams[1];
        $data['id'] = $explodedParams[2];
        $data['user_id'] = $explodedParams[3];
        $data['datas'] = json_decode($this->curl->simple_get(api_url('Api_Warehouse/getDataPo?id=' . $data['id'] . '&user_id=' . $data['user_id'])))->data[0];
        $data['detail'] = json_decode($data['datas']->data_detail);
        $data['approval'] = json_decode($this->curl->simple_get(api_url('Api_Warehouse/getDataPo?id=' . $data['id'] . '&user_id=' . $data['user_id'])))->data_approval;
        $html = $this->load->view('order/cetakPO', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['datas']->no_po . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        // // Instantiate canvas instance 
        // $canvas = $this->pdf->getCanvas();
        // $w = $canvas->get_width();
        // $h = $canvas->get_height();
        // $imageURL = base_url() . 'assets/image/logo/SMMtrans.png';
        // $imgWidth = 250;
        // $imgHeight = 250;
        // $canvas->set_opacity(.2);
        // // Specify horizontal and vertical position 
        // $x = (($w - $imgWidth) / 2);
        // $y = (($h - $imgHeight) / 3);
        // $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight, $resolution = "normal");
        $this->pdf->stream($data['datas']->no_po, array("Attachment" => 0));
    }
    public function cetakPenerimaan()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['no_sj'] = base64_decode($explodedParams[1]);
        $data['detail'] = json_decode(base64_decode($explodedParams[2]), TRUE);
        $data['nama_supplier'] = base64_decode($explodedParams[3]);
        $html = $this->load->view('order/cetakPenerimaan', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['no_sj'] . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream("report_kas", array("Attachment" => 0));
    }
    public function infoPR($id, $id_po = "")
    {
        $data['title'] = 'Information PR';
        $data['id'] = $id;
        $data['id_po'] = $id_po;
        $this->template->views('order/infoPR', $data);
    }
    public function infoPO($id)
    {
        $data['title'] = 'Information PO';
        $data['id'] = $id;
        $this->template->views('order/infoPO', $data);
    }
    public function infoSuratJalan($suratJalan, $id_po = "")
    {
        $data['title'] = 'Information Surat Jalan';
        $data['suratJalan'] = urldecode($suratJalan);
        $data['id_po'] = $id_po;
        $this->template->views('order/infoSuratJalan', $data);
    }
}
