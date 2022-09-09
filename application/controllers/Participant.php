<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Participant extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // libraries
        $this->load->library('pdf');
    }
    public function index()
    {
        $this->template->views('participant/index');
    }
    public function addParticipant()
    {
        $this->template->views('participant/add_participant');
    }
    public function viewDetailParticipant($schedule_id)
    {
        $data['schedule_id'] = $schedule_id;
        $this->template->views('participant/detailParticipant', $data);
    }
    public function cetakPartisipan()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['schedule_id'] = $explodedParams[1];
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Partisipan Quiz.pdf";

        $data['datas'] = json_decode($this->curl->simple_get(api_hrd('MasterHr/showQuizUser')))->data;
        // print_r($data['tanggal']);
        $html = $this->load->view('participant/cetak_participant', $data, true);
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream("report_kas", array("Attachment" => 0));
    }
}
