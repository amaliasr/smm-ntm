<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function hutang()
    {
        $this->template->views('report/hutang');
    }
    public function reportMutasiGudang()
    {
        $data['title'] = 'Report Gudang';
        $this->template->views('report/mutasi_gudang', $data);
    }
    public function reportOpname()
    {
        $data['title'] = 'Report Opname';
        $this->template->views('report/opname', $data);
    }
    public function reportPO()
    {
        $data['title'] = 'Report PO';
        $this->template->views('report/reportPO', $data);
    }
    public function exportLaporanGudang()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $item_id = var_dump(explode(',', $explodedParams[1]));
        $date_start = date('Y-m-d', strtotime($explodedParams[2]));
        $date_end = date('Y-m-d', strtotime($explodedParams[3]));
        $url = "Api_Warehouse/mutasiStock?item_id=" . $item_id . "&date_start=" . $date_start . "&date_end=" . $date_end . "";
        $main = json_decode(file_get_contents(api_url($url)), true);
        $body = $main['data'];
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $fileName = 'Report Gudang';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->mergeCells('A1:A3')->setCellValue('A1', 'No');
        $sheet->mergeCells('B1:B3')->setCellValue('B1', 'Nama Item');
        $sheet->mergeCells('C1:C3')->setCellValue('C1', 'Satuan');
        $sheet->mergeCells('D1:D3')->setCellValue('D1', 'Stock Awal');
        $bulan_awal = 4;
        $bulan_akhir = 4;
        $tanggal_awal = 4;
        $tanggal_akhir = 4;
        $stock_awal = 5;
        foreach (json_decode($body[0]['datas']) as $key => $value) {
            // kolom bulan
            $bulan_akhir  = $bulan_awal + (count($value->data_perhari) * 4);
            $bulan_awal = $bulan_awal + 1;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_akhir) . '1')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal) . '1', $value->bulan);
            $bulan_awal = $bulan_akhir;
            // kolom bulan
            // kolom tanggal
            foreach ($value->data_perhari as $keys => $values) {
                $tanggal_akhir  = $tanggal_awal + 4;
                $tanggal_awal = $tanggal_awal + 1;
                $sheet->mergeCells(Coordinate::stringFromColumnIndex($tanggal_awal) . '2:' . Coordinate::stringFromColumnIndex($tanggal_akhir) . '2')->setCellValue(Coordinate::stringFromColumnIndex($tanggal_awal) . '2', $values->perhari);
                $tanggal_awal = $tanggal_akhir;
                // kolom stock
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal++) . '3', 'IN');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal++) . '3', 'IN STOK');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal++) . '3', 'OUT');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal++) . '3', 'OUT STOK');
                // kolom stock
            }
            // kolom tanggal
        }
        $bulan_awal++;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_awal) . '3')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal++) . '1', 'TOTAL IN');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_awal) . '3')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal++) . '1', 'TOTAL IN OTHER');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_awal) . '3')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal++) . '1', 'TOTAL OUT');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_awal) . '3')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal++) . '1', 'TOTAL OUT OTHER');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($bulan_awal) . '1:' . Coordinate::stringFromColumnIndex($bulan_awal) . '3')->setCellValue(Coordinate::stringFromColumnIndex($bulan_awal++) . '1', 'STOCK AKHIR');

        $rowCount = 4;
        foreach ($body as $key => $value) {
            $sheet->setCellValue('A' . $rowCount, $key + 1);
            $sheet->setCellValue('B' . $rowCount, $value['name']);
            $sheet->setCellValue('C' . $rowCount, $value['satuan_name']);
            $sheet->setCellValue('D' . $rowCount, $value['stok_awal']);
            $total_in = 0;
            $total_inother = 0;
            $total_out = 0;
            $total_outother = 0;
            $stock_awal_2 = 5;
            foreach (json_decode($value['datas']) as $keys => $values) {
                foreach ($values->data_perhari as $keys2 => $values2) {
                    $total_in = $total_in + $values2->total_mutasi->jumlah_in;
                    $total_inother = $total_inother + $values2->total_mutasi->jumlah_in_other;
                    $total_out = $total_out + $values2->total_mutasi->jumlah_out;
                    $total_outother = $total_outother + $values2->total_mutasi->jumlah_out_other;
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $values2->total_mutasi->jumlah_in);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $values2->total_mutasi->jumlah_in_other);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $values2->total_mutasi->jumlah_out);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $values2->total_mutasi->jumlah_out_other);
                }
            }
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $total_in);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $total_inother);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $total_out);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $total_outother);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($stock_awal_2++) . $rowCount, $value['stok_akhir']);
            $rowCount++;
        }
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        // $writer = new Xlsx($spreadsheet);
        // $filename = 'REPORT GUDANG ' . $epoch;

        // header('Content-Type: application/vnd.ms-excel');
        // header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        // header('Cache-Control: max-age=0');

        // $writer->save('php://output');
    }
    public function exportReportPO()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $supplier_id = $explodedParams[1];
        $date_start = date('Y-m-d', strtotime($explodedParams[2]));
        $date_end = date('Y-m-d', strtotime($explodedParams[3]));
        $url = "Api_Warehouse/reportPrPo?supplier_id=" . $supplier_id . "&date_start=" . $date_start . "&date_end=" . $date_end . "";
        $main = json_decode(file_get_contents(api_url($url)), true);
        $body = $main['data'];
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $fileName = 'Report PO';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'TANGGAL PO');
        $sheet->setCellValue('B1', 'KODE NTM');
        $sheet->setCellValue('C1', 'NO PR');
        $sheet->setCellValue('D1', 'NOMOR PO');
        $sheet->setCellValue('E1', 'NAMA SUPPLIER');
        $sheet->setCellValue('F1', 'NAMA BAHAN');
        $sheet->setCellValue('G1', 'QTY');
        $sheet->setCellValue('H1', 'SATUAN');
        $sheet->setCellValue('I1', 'HARGA');
        $sheet->setCellValue('J1', 'DPP');
        $sheet->setCellValue('K1', 'PPN');
        $sheet->setCellValue('L1', 'TOTAL');
        $rowCount = 2;
        for ($k = 0; $k < count($body); $k++) {
            $sheet->setCellValue('A' . $rowCount, $body[$k]['date']);
            $sheet->setCellValue('B' . $rowCount, $body[$k]['item_code']);
            $sheet->setCellValue('C' . $rowCount, $body[$k]['no_pr']);
            $sheet->setCellValue('D' . $rowCount, $body[$k]['no_po']);
            $sheet->setCellValue('E' . $rowCount, $body[$k]['supplier_name']);
            $sheet->setCellValue('F' . $rowCount, $body[$k]['item_name']);
            $sheet->setCellValue('G' . $rowCount, $body[$k]['jumlah']);
            $sheet->setCellValue('H' . $rowCount, $body[$k]['item_satuan']);
            $sheet->setCellValue('I' . $rowCount, $body[$k]['harga']);
            $sheet->setCellValue('J' . $rowCount, $body[$k]['dpp']);
            $sheet->setCellValue('K' . $rowCount, $body[$k]['ppn']);
            $sheet->setCellValue('L' . $rowCount, $body[$k]['total']);
            $rowCount++;
        }
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'wrapText' => false,
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
        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray($styleArray);
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PO ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportMachine()
    {
        $data['title'] = 'Report Machine';
        $this->template->views('report/reportMachine', $data);
    }
}
