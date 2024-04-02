<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Style\Fill;

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
        $item_id = (explode(',', $explodedParams[1]));
        $date_start = date('Y-m-d', strtotime($explodedParams[2]));
        $textItem = '';
        // print_r($item_id);
        foreach ($item_id as $k => $v) {
            $textItem .= 'item_id%5B%5D=' . $v . '&';
        }
        $date_end = date('Y-m-d', strtotime($explodedParams[3]));
        $url = "Api_Warehouse/mutasiStock?" . $textItem . "date_start=" . $date_start . "&date_end=" . $date_end . "";
        $main = json_decode(file_get_contents(api_url($url)), true);
        $body = $main['data'];
        // print_r($body);
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

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT GUDANG ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
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
    public function reportProduction()
    {
        $data['title'] = 'Report Production';
        $this->template->views('report/reportProduction', $data);
    }
    public function reportProductionWorker()
    {
        $data['title'] = 'Report Production Worker';
        $this->template->views('report/reportProductionWorker', $data);
    }
    public function pdfProductionWorker()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['format'] = $explodedParams[1];
        $data['date_start'] = date('Y-m-d', strtotime($explodedParams[2]));
        $data['date_end'] = date('Y-m-d', strtotime($explodedParams[3]));
        $data['groupingOption'] = $explodedParams[4];
        $data['periodOption'] = $explodedParams[5];
        $data['machineId'] = $explodedParams[6];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getReportResultPerson?dateStart=' . $data['dateStart'] . '&dateEnd=' . $data['dateEnd'] . '&groupingOption=' . $data['groupingOption'] . '&periodOption=' . $data['periodOption'] . '&machineId=' . $data['machineId'])))->data;
        $html = $this->load->view('report/cetakProductionWorker', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "REPORT PRODUCTION WORKER.pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream($data['datas']->no_pr, array("Attachment" => 0));
    }
    public function groupDataByProperties($data, $propertyNames)
    {
        // Menggunakan array asosiatif untuk menyimpan nilai unik dari kombinasi properti
        $uniqueValuesArray = array();

        // Loop melalui data untuk mendapatkan nilai unik dari kombinasi properti
        foreach ($data as $item) {
            // Membuat array yang berisi nilai properti yang diinginkan
            $propertyValues = array_map(function ($propertyName) use ($item) {
                if (isset($item->$propertyName->name)) {
                    return $item->$propertyName->name;
                } else {
                    return $item->$propertyName;
                }
            }, $propertyNames);

            // Menambahkan array nilai properti ke dalam array asosiatif
            $uniqueValuesArray[json_encode($propertyValues)] = $propertyValues;
        }

        // Mengembalikan hasilnya dalam bentuk array asosiatif
        return array_values($uniqueValuesArray);
    }
    function groupAndSum($arr, $groupKeys, $sumKeys)
    {
        $result = [];

        foreach ($arr as $curr) {
            $group = implode('-', array_map(function ($k) use ($curr) {
                return $curr[$k];
            }, $groupKeys));

            if (!isset($result[$group])) {
                $result[$group] = array_merge(array_combine($groupKeys, array_map(function ($k) use ($curr) {
                    return $curr[$k];
                }, $groupKeys)), array_combine($sumKeys, array_fill(0, count($sumKeys), 0)));
            }

            foreach ($sumKeys as $k) {
                $result[$group][$k] += $curr[$k];
            }
        }

        return array_values($result);
    }
    function findQty($data, $criteria)
    {
        foreach ($data as $item) {
            $match = true;

            foreach ($criteria as $key => $value) {
                // Mengatasi properti dengan hierarki
                $keys = explode('->', $key);
                $currentValue = $item;

                foreach ($keys as $nestedKey) {
                    if (isset($currentValue->{$nestedKey})) {
                        $currentValue = $currentValue->{$nestedKey};
                    } else {
                        $match = false;
                        break;
                    }
                }

                if (!$match || $currentValue != $value) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                // Mengatasi nilai null
                $qtyGoods = isset($item->qty_goods) ? $item->qty_goods : 0;
                $qtyReject = isset($item->qty_reject) ? $item->qty_reject : 0;
                $qtyWaste = isset($item->qty_waste) ? $item->qty_waste : 0;

                return [
                    'qty_goods' => $qtyGoods,
                    'qty_reject' => $qtyReject,
                    'qty_waste' => $qtyWaste,
                ];
            }
        }

        return null;
    }

    public function excelProductionWorker()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $format = $explodedParams[1];
        // format 0 raw
        $date_start = date('Y-m-d', strtotime($explodedParams[2]));
        $date_end = date('Y-m-d', strtotime($explodedParams[3]));
        $groupingOption = $explodedParams[4];
        $nameVariable = strtolower($groupingOption);
        $periodOption = $explodedParams[5];
        $machineId = $explodedParams[6];
        $dataStructure = json_decode($explodedParams[7]);
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultPerson?dateStart=' . $date_start . '&dateEnd=' . $date_end . '&groupingOption=' . $groupingOption . '&periodOption=' . $periodOption . '&machineId=' . $machineId)))->data->reportResultPerson;
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $jumlahColumn = 1;
        if ($format == 0) {
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'No');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Tanggal');
            if ($groupingOption == 'WORKER') {
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'IED');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'No. Meja');
            }
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Worker');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Product');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Unit');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Good');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Waste');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Reject');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Jumlah Setor');
            $jumlahColumn = 1;
            $rowCount = 2;
            for ($k = 0; $k < count($body); $k++) {
                $jumlahColumn = 1;
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $k + 1);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->date);
                if ($groupingOption == 'WORKER') {
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->$nameVariable->eid);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->row_code);
                }
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->$nameVariable->name);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->item->name);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->unit->name);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->qty_goods);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->qty_waste);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->qty_reject);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $rowCount, $body[$k]->deliv_total);
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
            $spreadsheet->getActiveSheet()->getStyle('A1:K1')->applyFromArray($styleArray);
        } else {
            $jumlahColumn = 1;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'No');
            if ($groupingOption == 'WORKER') {
                $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'EID');
                $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'No. Meja');
            }
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', ucfirst($groupingOption));
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Product');
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '' . $dataStructure->$periodOption->rowspan)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Unit');
            $jumlahRow = 1;
            $variableColumn = $jumlahColumn;
            $loopEnd = 1;
            foreach ($dataStructure->$periodOption->data as $key => $value) {
                $jumlahColumn = $variableColumn;
                $dataChild = $this->groupDataByProperties($body, [$value->variable]);
                $jumlahLoop = 1;
                $loopEnd = $loopEnd * count($dataChild);
                if ($jumlahRow == count($dataStructure->$periodOption->data) && count($dataStructure->$periodOption->data) >= 1) {
                    $jumlahLoop = count($this->groupDataByProperties($body, [$dataStructure->$periodOption->data[0]->variable]));
                }
                // for ($j = 0; $j < $jumlahLoop; $j++) {
                for ($i = 0; $i < count($dataChild); $i++) {
                    $endJumlahColumn = $jumlahColumn + $value->colspan - 1;
                    // echo $dataChild[$i][0];
                    $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($endJumlahColumn) . $jumlahRow)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow, $dataChild[$i][0]);
                    $jumlahColumn = $endJumlahColumn + 1;
                }
                // }
                $jumlahRow++;
            }
            $jumlahColumn = $variableColumn;
            for ($i = 0; $i < $loopEnd; $i++) {
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'Good');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'Waste');
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'Reject');
            }
            $rowCount = 0;
            for ($k = 0; $k < count($body); $k++) {
                $data_report_detail[$rowCount]['item_id'] = $body[$k]->item->id;
                $data_report_detail[$rowCount]['item_name'] = $body[$k]->item->name;
                $data_report_detail[$rowCount]['item_code'] = $body[$k]->item->code;
                $data_report_detail[$rowCount]['unit_id'] = $body[$k]->unit->id;
                $data_report_detail[$rowCount]['unit_name'] = $body[$k]->unit->name;
                $data_report_detail[$rowCount]['qty_waste'] = $body[$k]->qty_waste;
                $data_report_detail[$rowCount]['qty_reject'] = $body[$k]->qty_reject;
                $data_report_detail[$rowCount]['qty_goods'] = $body[$k]->qty_goods;
                $data_report_detail[$rowCount][$nameVariable . '_id'] = $body[$k]->$nameVariable->id;
                $data_report_detail[$rowCount][$nameVariable . '_name'] = $body[$k]->$nameVariable->name;
                if ($groupingOption == 'WORKER') {
                    $data_report_detail[$rowCount][$nameVariable . '_eid'] = $body[$k]->$nameVariable->eid;
                    $data_report_detail[$rowCount][$nameVariable . '_row_code'] = $body[$k]->row_code;
                }
                $rowCount++;
            }
            if ($groupingOption == 'WORKER') {
                $dataMachine = $this->groupAndSum($data_report_detail, [$nameVariable . '_id', $nameVariable . '_name', $nameVariable . '_eid', $nameVariable . '_row_code', 'item_id', 'item_name', 'unit_name'], []);
            } else {
                $dataMachine = $this->groupAndSum($data_report_detail, [$nameVariable . '_id', $nameVariable . '_name', 'item_id', 'item_name', 'unit_name'], []);
            }
            $jumlahRow++;
            $jumlahColumn = 1;
            $no = 1;
            $indexChild = 0;
            foreach ($dataStructure->$periodOption->data as $key => $value) {
                $variableUsed = str_replace('.', '->', $value->variable_used);
                $dataChildBody[$indexChild]['variable'] = $variableUsed;
                $dataChildBody[$indexChild]['data'] = $this->groupDataByProperties($body, [$value->variable]);
                $indexChild++;
            }
            foreach ($dataMachine as $key => $value) {
                $jumlahColumn = 1;
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
                if ($groupingOption == 'WORKER') {
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value[$nameVariable . '_eid']);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value[$nameVariable . '_row_code']);
                }
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value[$nameVariable . '_name']);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['item_name']);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['unit_name']);
                for ($i = 0; $i < count($dataChildBody); $i++) {
                    $indexCriteria = 0;
                    if (count($dataChildBody) > 1) {
                        for ($j = 0; $j < count($dataChildBody[0]['data']); $j++) {
                            for ($k = 0; $k < count($dataChildBody[1]['data']); $k++) {
                                $criteria[$indexCriteria]['item->id'] = $value['item_id'];
                                $criteria[$indexCriteria][$nameVariable . '->id'] = $value[$nameVariable . '_id'];
                                $criteria[$indexCriteria][$dataChildBody[0]['variable']] = $dataChildBody[0]['data'][$j][0];
                                $criteria[$indexCriteria][$dataChildBody[1]['variable']] = $dataChildBody[1]['data'][$k][0];
                                $indexCriteria++;
                            }
                        }
                    } else {
                        for ($j = 0; $j < count($dataChildBody[0]['data']); $j++) {
                            $criteria[$indexCriteria]['item->id'] = $value['item_id'];
                            $criteria[$indexCriteria][$nameVariable . '->id'] = $value[$nameVariable . '_id'];
                            $criteria[$indexCriteria][$dataChildBody[0]['variable']] = $dataChildBody[0]['data'][$j][0];
                            $criteria[$indexCriteria][$dataChildBody[0]['variable']] = $dataChildBody[0]['data'][$j][0];
                            $indexCriteria++;
                        }
                    }
                }
                foreach ($criteria as $k => $v) {
                    $qty = $this->findQty($body, $v);
                    if (!$qty) {
                        $qty['qty_goods'] = '-';
                        $qty['qty_reject'] = '-';
                        $qty['qty_waste'] = '-';
                    }
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $qty['qty_goods']);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $qty['qty_waste']);
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $qty['qty_reject']);
                }
                $jumlahRow++;
            }
        }
        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PRODUCTION WORKER ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportPersonEarn()
    {
        $data['title'] = 'Report Person Earn';
        $this->template->views('report/reportPersonEarn', $data);
    }
    public function excelPersonEarn()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $date_start = date('Y-m-d', strtotime($explodedParams[1]));
        $date_end = date('Y-m-d', strtotime($explodedParams[2]));
        $machineId = $explodedParams[3];
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultPersonEarn?dateStart=' . $date_start . '&dateEnd=' . $date_end . '&machineId=' . $machineId)))->data->reportResultPersonEarn;
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->mergeCells('A1:A2')->setCellValue('A1', 'No');
        $sheet->mergeCells('B1:B2')->setCellValue('B1', 'EID');
        $sheet->mergeCells('C1:C2')->setCellValue('C1', 'Nama');
        $sheet->mergeCells('D1:D2')->setCellValue('D1', 'No. Meja');
        $jumlahColumn = 5;
        $jumlahColumn2 = 5;
        $keys = array_map(function ($item) {
            return key($item);
        }, $body[0]->data);
        for ($i = 0; $i < count($keys); $i++) {
            $startColumn = $jumlahColumn;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($startColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 2) . '1')->setCellValue(Coordinate::stringFromColumnIndex($startColumn) . '1', $keys[$i]);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'QTY');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Earn');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Setor');
            $jumlahColumn++;
        }
        $jumlahRow = 3;
        $jumlahColumn = 1;
        $no = 1;
        $styleArrayFormula = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'f9dfdf',
                ],
                'endColor' => [
                    'argb' => 'f9dfdf',
                ],
            ],
        ];
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->eid);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->row_code);
            // print_r($value->data);
            foreach ($value->data as $item) {
                $dateKey = key((array)$item);
                $jumlahColumQty = $jumlahColumn;
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->qty);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->earn);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_deliv);
                if ($item->{$dateKey}->reject_left) {
                    $sheet->getStyle(Coordinate::stringFromColumnIndex($jumlahColumQty) . $jumlahRow)->applyFromArray($styleArrayFormula);
                }
            }
            $jumlahRow++;
        }


        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PERSON SALARY SUMMARY' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function excelPersonEarnDetail()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $date_start = date('Y-m-d', strtotime($explodedParams[1]));
        $date_end = date('Y-m-d', strtotime($explodedParams[2]));
        $machineId = $explodedParams[3];
        $viewBy = $explodedParams[4];
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultPersonEarn?dateStart=' . $date_start . '&dateEnd=' . $date_end . '&machineId=' . $machineId)))->data->reportResultPersonEarn;
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->mergeCells('A1:A2')->setCellValue('A1', 'No');
        $sheet->mergeCells('B1:B2')->setCellValue('B1', 'EID');
        $sheet->mergeCells('C1:C2')->setCellValue('C1', 'Nama');
        $sheet->mergeCells('D1:D2')->setCellValue('D1', 'No. Meja');
        $jumlahColumn = 5;
        $jumlahColumn2 = 5;
        $keys = array_map(function ($item) {
            return key($item);
        }, $body[0]->data);
        for ($i = 0; $i < count($keys); $i++) {
            $startColumn = $jumlahColumn;
            if ($viewBy) {
                $num = 0;
                foreach ($body[0]->data as $item) {
                    $dateKey = key((array)$item);
                    if ($dateKey == $keys[$i]) {
                        $num = count($item->{$dateKey}->detail_total);
                    }
                }
            } else {
                $num = 0;
            }
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($startColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 2 + ($num * 2)) . '1')->setCellValue(Coordinate::stringFromColumnIndex($startColumn) . '1', $keys[$i]);
            if ($viewBy) {
                if ($num) {
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'QTY Pokok');
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Earn Pokok');
                    if ($num > 1) {
                        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'QTY Incentive');
                        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Earn Incentive');
                    }
                }
            }
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total QTY');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Earn');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Setor');
            $jumlahColumn++;
        }
        $jumlahRow = 3;
        $jumlahColumn = 1;
        $no = 1;
        $styleArrayFormula = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'f9dfdf',
                ],
                'endColor' => [
                    'argb' => 'f9dfdf',
                ],
            ],
        ];
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->eid);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->row_code);
            // print_r($value->data);
            foreach ($value->data as $item) {
                $dateKey = key((array)$item);
                $jumlahColumQty = $jumlahColumn;
                if ($viewBy) {
                    $num = 0;
                    foreach ($body[0]->data as $items) {
                        $dateKeys = key((array)$items);
                        if ($dateKeys == $dateKey) {
                            $num = count($items->{$dateKeys}->detail_total);
                        }
                    }
                    for ($k = 0; $k < $num; $k++) {
                        if (isset($item->{$dateKey}->detail_total[$k])) {
                            $dataItem = $item->{$dateKey}->detail_total[$k];
                            foreach ($dataItem as $k2 => $v2) {
                                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $v2);
                            }
                        } else {
                            for ($l = 0; $l < 2; $l++) {
                                $jumlahColumn++;
                            }
                        }
                    }
                    // foreach ($item->{$dateKey}->detail_total as $v) {
                    //     $detailKey = key((array)$v);
                    //     $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $v->{$detailKey});
                    // }
                }
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_qty);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_earn);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_deliv);
                if ($item->{$dateKey}->reject_left) {
                    $sheet->getStyle(Coordinate::stringFromColumnIndex($jumlahColumQty) . $jumlahRow)->applyFromArray($styleArrayFormula);
                }
            }
            $jumlahRow++;
        }

        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PERSON SALARY DETAIL ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportIncomplete()
    {
        $data['title'] = 'Report Incomplete Data';
        $this->template->views('report/reportIncompleteData', $data);
    }
    public function reportProductionDaily()
    {
        $data['title'] = 'Report Production Daily';
        $this->template->views('report/reportProductionDaily', $data);
    }
    public function reportDailySKT()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $date = date('Y-m-d', strtotime($explodedParams[1]));
        $machineId = $explodedParams[2];
        $rowCode = $explodedParams[3];
        $dataProfile = $explodedParams[4];
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultPersonDaily?date=' . $date . '&machineId=' . $machineId . '&rowCode=' . $rowCode . '&dataProfile=' . $dataProfile)))->data->reportResultPersonDaily;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->mergeCells('A1:A2')->setCellValue('A1', 'No');
        $sheet->mergeCells('B1:B2')->setCellValue('B1', 'EID');
        $sheet->mergeCells('C1:C2')->setCellValue('C1', 'Nama');
        $sheet->mergeCells('D1:D2')->setCellValue('D1', 'Group');
        $keys = array_map(function ($item) {
            return key($item);
        }, $body[0]->data);
        $jumlahColumn = 5;
        $jumlahColumn2 = 5;
        for ($i = 0; $i < count($keys); $i++) {
            $startColumn = $jumlahColumn;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($startColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 1) . '1')->setCellValue(Coordinate::stringFromColumnIndex($startColumn) . '1', 'Setoran ' . $keys[$i]);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Jumlah Setoran');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Jam');
            $jumlahColumn++;
        }
        $jumlahRow = 3;
        $jumlahColumn = 1;
        $no = 1;
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->eid);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->row_code);
            // print_r($value->data);
            foreach ($value->data as $item) {
                $dateKey = key((array)$item);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_good);
                $time = '';
                if ($item->{$dateKey}->time) {
                    $time = date("H:i", strtotime($item->{$dateKey}->time[0]));
                }
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $time);
            }
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->total_good);
            $jumlahRow++;
        }
        $jumlahColumn = $jumlahColumn - 1;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn) . '1', 'Total');
        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PRODUCTION DAILY ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportDailySKTPdf()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['date'] = date('Y-m-d', strtotime($explodedParams[1]));
        $data['machineId'] = $explodedParams[2];
        $data['rowCode'] = $explodedParams[3];
        $data['dataProfile'] = $explodedParams[4];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getReportResultPersonDaily?date=' . $data['date'] . '&machineId=' . $data['machineId'] . '&rowCode=' . $data['rowCode'] . '&dataProfile=' . $data['dataProfile'])))->data;
        // $this->load->view('report/cetakReportDailySKT', $data);
        $html = $this->load->view('report/cetakReportDailySKT', $data, true);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "REPORT PRODUCTION DAILY.pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream('REPORT PRODUCTION DAILY', array("Attachment" => 0));
    }
    public function reportPersonQuality()
    {
        $data['title'] = 'Report Person Quality';
        $this->template->views('report/reportPersonQuality', $data);
    }
    public function reportPersonQualityExcel()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $dateStart = date('Y-m-d', strtotime($explodedParams[1]));
        $dateEnd = date('Y-m-d', strtotime($explodedParams[2]));
        $machineId = $explodedParams[3];
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultPersonQuality?dateStart=' . $dateStart . '&dateEnd=' . $dateEnd . '&machineId=' . $machineId)))->data->reportResultPersonQuality;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->mergeCells('A1:A2')->setCellValue('A1', 'No');
        $sheet->mergeCells('B1:B2')->setCellValue('B1', 'EID');
        $sheet->mergeCells('C1:C2')->setCellValue('C1', 'Nama');
        $keys = array_map(function ($item) {
            return key($item);
        }, $body[0]->data);
        $jumlahColumn = 4;
        $jumlahColumn2 = 4;
        // print_r($keys);
        // exit();
        for ($i = 0; $i < count($keys); $i++) {
            $startColumn = $jumlahColumn;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($startColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 5) . '1')->setCellValue(Coordinate::stringFromColumnIndex($startColumn) . '1', date("M Y", strtotime($keys[$i])));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Quality');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'AVG Deliv');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Good');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Deliv');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total Bad');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Total All');
            $jumlahColumn++;
        }
        $jumlahRow = 3;
        $jumlahColumn = 1;
        $no = 1;
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->eid);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->name);
            // print_r($value->data);
            foreach ($value->data as $item) {
                $dateKey = key((array)$item);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->quality);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->avg_deliv);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_good);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_deliv);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_bad);
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $item->{$dateKey}->total_all);
            }
            $jumlahRow++;
        }
        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT PERSON QUALITY ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportResultProduction()
    {
        $data['title'] = 'Report Result Production';
        $this->template->views('report/reportResultProduction', $data);
    }
    public function reportResultProductionExcel()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $dateStart = date('Y-m-d', strtotime($explodedParams[1]));
        $dateEnd = date('Y-m-d', strtotime($explodedParams[2]));
        $machineId = $explodedParams[3];
        $body = json_decode($this->curl->simple_get(api_produksi('getReportResultProduction?dateStart=' . $dateStart . '&dateEnd=' . $dateEnd . '&machineId=' . $machineId)))->data->reportResultPerson;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $jumlahColumn = 1;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'No');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Tanggal');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Shift');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Mesin');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Item');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'QTY');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'Unit');
        $jumlahColumn2 = $jumlahColumn;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 7) . '1')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2) . '1', 'Employee');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Cacther 1');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Cacther 2');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Helper 1');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Helper 2');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Mekanik 1');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Mekanik 2');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Operator 1');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn2++) . '2', 'Operator 2');
        $jumlahRow = 3;
        $jumlahColumn = 1;
        $no = 1;
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->date);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->shift->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->machine->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->item->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->qty);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->unit->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_catcher1->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_catcher2->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_helper1->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_helper2->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_mechanic1->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_mechanic2->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_operator1->name ?? '-'));
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, ($value->employee_operator2->name ?? '-'));
            $jumlahRow++;
        }
        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT RESULT PRODUCTION ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportProductionGiling()
    {
        $data['title'] = 'Report Production Giling';
        $this->template->views('report/reportProductionGiling', $data);
    }
    public function reportGilingPdf()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['date'] = date('Y-m-d', strtotime($explodedParams[1]));
        $data['machineId'] = $explodedParams[2];
        $data['rowCode'] = $explodedParams[3];
        $data['tipeData'] = $explodedParams[4];
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getResultProductWorkerTotalDaily?date=' . $data['date'] . '&machineId=' . $data['machineId'] . '&rowCode=' . $data['rowCode'])))->data;
        // $this->load->view('report/cetakRreportGilingPdf', $data);
        $html = $this->load->view('report/cetakRreportGilingPdf', $data, true);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "REPORT GILING.pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream('REPORT GILING', array("Attachment" => 0));
    }
    public function reportGilingExcel()
    {
        $dataMaterial = [
            [
                'satuan' => 'KG',
                'material' => 'TEMBAKAU GBK',
                'jumlah' => 10,
            ],
            [
                'satuan' => 'LEMBAR',
                'material' => 'AMBRI',
                'jumlah' => 10,
            ],
            [
                'satuan' => 'LITER',
                'material' => 'PEMANIS',
                'jumlah' => 10,
            ],
        ];

        $dataKaleng = [
            [
                'jenisKaleng' => 'MERAH MUDA TUTUP KOTAK',
                'ukuranKaleng1' => 0.36,
                'ukuranKaleng2' => 2.54,
                'tsg' => 2.18,
            ],
            [
                'jenisKaleng' => 'HIJAU & MERAH MUDA TUTUP BULAT YG BAGUS',
                'ukuranKaleng1' => 0.41,
                'ukuranKaleng2' => 2.54,
                'tsg' => 2.54,
            ],
            [
                'jenisKaleng' => 'BIRU & HIJAU KALENG LAMA',
                'ukuranKaleng1' => 0.33,
                'ukuranKaleng2' => 2.56,
                'tsg' => 2.23,
            ],
        ];
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $date = date('Y-m-d', strtotime($explodedParams[1]));
        $machineId = $explodedParams[2];
        $rowCode = $explodedParams[3];
        $tipeData = $explodedParams[4];
        $body = json_decode($this->curl->simple_get(api_produksi('getResultProductWorkerTotalDaily?date=' . $date . '&machineId=' . $machineId . '&rowCode=' . $rowCode)))->data->resultProductWorkerTotal;
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->getProtection()->setSheet(true);
        $spreadsheet->getDefaultStyle()->getProtection()->setLocked(false);
        $sheet = $spreadsheet->getActiveSheet();
        $jumlahColumn = 1;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'SATUAN');
        $jumlahColumnBefore = $jumlahColumn;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn += 1) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore) . '1', 'MATERIAL');
        $jumlahColumn++;
        $jumlahColumnBefore = $jumlahColumn;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 2) . '1')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore) . '1', 'SISA AWAL');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'DI ORANG GILING');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'DI GUDANG GILING');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'TOTAL');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'DARI GUDANG BESAR');
        $jumlahColumn++;
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'TERIMA');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'PEMAKAIAN');
        $jumlahColumnBefore = $jumlahColumn;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 2) . '1')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore) . '1', 'SISA AKHIR');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'DI ORANG GILING');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'DI GUDANG GILING');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . '2', 'TOTAL');
        $jumlahColumn++;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'WASTE AMBRI RUSAK');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'WASTE TEMB. SAPON (KG)');
        $jumlahColumnKaleng = $jumlahColumn;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn += 3) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnKaleng) . '1', 'WARNA KALENG');
        $jumlahColumn++;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'UKURAN KALENG');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'UKURAN KALENG');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . '1:' . Coordinate::stringFromColumnIndex($jumlahColumn) . '2')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . '1', 'MURNI TSG SAJA');
        // data material
        $jumlahRow = 3;
        foreach ($dataMaterial as $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['satuan']);
            $jumlahColumnBefore = $jumlahColumn;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) .  $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn += 1) .  $jumlahRow)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore) . $jumlahRow, $value['material']);
            $sheet->setCellValue('F' . $jumlahRow, '=(D' . $jumlahRow . '+E' . $jumlahRow . ')');
            $jumlahRow++;
        }
        $jumlahRow = 3;
        $jumlahBefore = $jumlahColumnKaleng;
        foreach ($dataKaleng as $value) {
            $jumlahColumn = $jumlahColumnKaleng;
            $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn += 3) . $jumlahRow)->setCellValue(Coordinate::stringFromColumnIndex($jumlahBefore) . $jumlahRow, $value['jenisKaleng']);
            $jumlahColumn++;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['ukuranKaleng1']);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['ukuranKaleng2']);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value['tsg']);
            $jumlahRow++;
        }
        $jumlahRowStart = 7;
        $jumlahColumnStart = 1;
        $jumlahRow = $jumlahRowStart;
        $jumlahColumn = $jumlahColumnStart;
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'NO');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'NIK');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'NAMA');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'GROUP');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'SISA AWAL TSG');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'TERIMA TSG');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'PEMAKAIAN TSG');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'SISA AKHIR TSG');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'RATA2 BERAT PER BTG');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'SISA AWAL AMBRI');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'PENGAMBILAN AMBRI (BTG)');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'SISA AKHIR AMBRI');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, 'HASIL PRODUKSI');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow++, 'AMBRI RUSAK (LBR)');
        $no = 1;
        $totalProduksi = 0;
        foreach ($body as $key => $value) {
            $jumlahColumn = 1;
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $no++);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->eid);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->employee->name);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->row_code);
            $sheet->setCellValue(Coordinate::stringFromColumnIndex(7) . $jumlahRow, '=(' . Coordinate::stringFromColumnIndex(5) . $jumlahRow . '+' . Coordinate::stringFromColumnIndex(6) . $jumlahRow . ')-' . Coordinate::stringFromColumnIndex(8) . $jumlahRow . '');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex(9) . $jumlahRow, '=(' . Coordinate::stringFromColumnIndex(7) . $jumlahRow . '/' . Coordinate::stringFromColumnIndex(13) . $jumlahRow . ')');
            $sheet->setCellValue(Coordinate::stringFromColumnIndex(14) . $jumlahRow, '=(' . Coordinate::stringFromColumnIndex(10) . $jumlahRow . '+' . Coordinate::stringFromColumnIndex(11) . $jumlahRow . '-' . Coordinate::stringFromColumnIndex(12) . $jumlahRow . '-' . Coordinate::stringFromColumnIndex(13) . $jumlahRow . ')');
            $jumlahColumn += 8;
            if ($tipeData == 'DATA') {
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow, $value->qty);
            } else {
                $jumlahColumn++;
            }
            $jumlahRow++;
            $totalProduksi += $value->qty;
        }
        $jumlahRowEnd = $jumlahRow - 1;
        $jumlahColumnEnd = $jumlahColumn;
        // bagian bawah 
        $jumlahRow = $jumlahRowEnd + 2;
        $jumlahRow2 = $jumlahRowEnd + 3;
        $jumlahColumn = 4;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'SISA AWAL');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'TERIMA BATANGAN DARI WAGIR');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'HASIL PRODUKSI');
        $jumlahColumnBefore = $jumlahColumn;

        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn = $jumlahColumn + 1) . $jumlahRow . '')->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore) . $jumlahRow . '', 'PEMAKAIAN');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . $jumlahRow2, 'AK 12 SKT');
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumnBefore++) . $jumlahRow2, 'AK 16 SKT');
        $jumlahColumn++;
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'SISA AKHIR');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'WASTE BTG DI BANDULAN');
        $sheet->mergeCells(Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow . ':' . Coordinate::stringFromColumnIndex($jumlahColumn) . $jumlahRow2)->setCellValue(Coordinate::stringFromColumnIndex($jumlahColumn++) . $jumlahRow . '', 'WASTE BTGAN DI WAGIR');


        $sheet->setCellValue('H3', '=SUM(E' . ($jumlahRowStart + 1) . ':E' . $jumlahRowEnd . ')');
        $sheet->setCellValue('I3', '=SUM(H' . ($jumlahRowStart + 1) . ':H' . $jumlahRowEnd . ')');
        $sheet->setCellValue('H4', '=SUM(J' . ($jumlahRowStart + 1) . ':J' . $jumlahRowEnd . ')');
        $sheet->setCellValue('I4', '=SUM(L' . ($jumlahRowStart + 1) . ':L' . $jumlahRowEnd . ')');
        $sheet->setCellValue('L4', '=SUM(N' . ($jumlahRowStart + 1) . ':N' . $jumlahRowEnd . ')');
        $sheet->setCellValue('K3', '=(I3+J3)');
        $sheet->setCellValue('K4', '=(I4+J4)');

        $sheet->setCellValue('F' . ($jumlahRow2 + 1), $totalProduksi);
        $styleArrayHeader = [
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
        $styleArrayBody = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '383838'],
                ],
            ],
        ];
        $styleArrayFormula = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'd7d7d7',
                ],
                'endColor' => [
                    'argb' => 'd7d7d7',
                ],
            ],
            'protection' => array('locked' => \PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED),
        ];

        $sheet->getStyle('F3:F5')->applyFromArray($styleArrayFormula);
        $sheet->getStyle('H3:H4')->applyFromArray($styleArrayFormula);
        $sheet->getStyle('I3:I4')->applyFromArray($styleArrayFormula);
        $sheet->getStyle('K3:K4')->applyFromArray($styleArrayFormula);
        $sheet->getStyle('L4')->applyFromArray($styleArrayFormula);
        $sheet->getStyle('G8:G' . $jumlahRowEnd)->applyFromArray($styleArrayFormula);
        $sheet->getStyle('I8:I' . $jumlahRowEnd)->applyFromArray($styleArrayFormula);
        $sheet->getStyle('N8:N' . $jumlahRowEnd)->applyFromArray($styleArrayFormula);
        $sheet->getStyle('A1:T2')->applyFromArray($styleArrayHeader);
        $sheet->getStyle('A7:N7')->applyFromArray($styleArrayHeader);
        $sheet->getStyle('D' . ($jumlahRowEnd + 2) . ':K' . ($jumlahRowEnd + 3))->applyFromArray($styleArrayHeader);
        $sheet->getStyle('A3:T5')->applyFromArray($styleArrayBody);
        $sheet->getStyle('D' . ($jumlahRowEnd + 4) . ':K' . ($jumlahRowEnd + 5))->applyFromArray($styleArrayBody);
        $sheet->getStyle(Coordinate::stringFromColumnIndex($jumlahColumnStart) . $jumlahRowStart . ':' . Coordinate::stringFromColumnIndex($jumlahColumnEnd) . $jumlahRowEnd)->applyFromArray($styleArrayBody);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(35);
        // exit;
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORT GILING EXCEL ' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function reportLeavePass()
    {
        $data['title'] = 'Report Leave Pass';
        $this->template->views('report/reportLeavePass', $data);
    }
    public function pdfLeavePass()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $data['dateStart'] = date('Y-m-d', strtotime($explodedParams[1]));
        $data['dateEnd'] = date('Y-m-d', strtotime($explodedParams[2]));
        $data['datas'] = json_decode($this->curl->simple_get(api_produksi('getReportLeavePassLog?dateStart=' . $data['dateStart'] . '&dateEnd=' . $data['dateEnd'])))->data;
        $html = $this->load->view('report/cetakRreportLeavePassPdf', $data, true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "REPORT LEAVE PASS.pdf";
        $this->pdf->loadHtml($html);
        $this->pdf->render();
        $this->pdf->stream('REPORT LEAVE PASS', array("Attachment" => 0));
    }
}
