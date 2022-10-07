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
    public function cetakPR()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['qrcode'] = $explodedParams[1];
        $data['id'] = $explodedParams[2];
        $data['datas'] = json_decode($this->curl->simple_get(api_url('Api_Warehouse/getDataPR?id=' . $data['id'])))->data[0];
        $data['detail'] = json_decode($data['datas']->data_detail);
        $html = $this->load->view('Order/cetakPR', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $data['datas']->no_pr . ".pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream("report_kas", array("Attachment" => 0));
    }
}
