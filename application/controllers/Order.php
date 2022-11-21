<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
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
    public function payments()
    {
        $this->template->views('order/payments');
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
        $html = $this->load->view('Order/cetakPR', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['datas']->no_pr . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        // Instantiate canvas instance 
        $canvas = $this->pdf->getCanvas();
        $w = $canvas->get_width();
        $h = $canvas->get_height();
        $imageURL = base_url() . 'assets/image/logo/SMMtrans.png';
        $imgWidth = 250;
        $imgHeight = 250;
        $canvas->set_opacity(.2);
        // Specify horizontal and vertical position 
        $x = (($w - $imgWidth) / 2);
        $y = (($h - $imgHeight) / 3);
        $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight, $resolution = "normal");
        $this->pdf->stream("report_kas", array("Attachment" => 0));
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
        $html = $this->load->view('Order/cetakPO', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['datas']->no_po . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        // Instantiate canvas instance 
        $canvas = $this->pdf->getCanvas();
        $w = $canvas->get_width();
        $h = $canvas->get_height();
        $imageURL = base_url() . 'assets/image/logo/SMMtrans.png';
        $imgWidth = 250;
        $imgHeight = 250;
        $canvas->set_opacity(.2);
        // Specify horizontal and vertical position 
        $x = (($w - $imgWidth) / 2);
        $y = (($h - $imgHeight) / 3);
        $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight, $resolution = "normal");
        $this->pdf->stream("report_kas", array("Attachment" => 0));
    }
    public function cetakPenerimaan()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['no_sj'] = base64_decode($explodedParams[1]);
        $data['detail'] = json_decode(base64_decode($explodedParams[2]), TRUE);
        $data['nama_supplier'] = base64_decode($explodedParams[3]);
        $html = $this->load->view('Order/cetakPenerimaan', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['no_sj'] . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream("report_kas", array("Attachment" => 0));
    }
}
