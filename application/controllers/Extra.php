<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Extra extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function rawData()
    {
        $data['title'] = 'Raw Data';
        $this->template->views('extra/raw_data', $data);
    }
    public function exportRawDataMutationStock()
    {
        $params = $this->input->get('params');
        $decodedParams = urldecode($params);
        $explodedParams = explode("*$", $decodedParams);
        $item_id = $explodedParams[1];
        $date_start = date('Y-m-d', strtotime($explodedParams[2]));
        $date_end = date('Y-m-d', strtotime($explodedParams[3]));
        $item_category_id = $explodedParams[4];
        $url = "Api_Warehouse/mutasiStockRaw?itemId=" . $item_id . "&date_start=" . $date_start . "&date_end=" . $date_end . "&is_mutation_only=0&itemCategoryId=" . $item_category_id;
        $main = json_decode(file_get_contents(api_url($url)), true);
        $body = $main['data'];
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $fileName = 'RAW DATA MUTATION STOCK';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $index = 0;
        $rowCount = 2;
        $rowCountEnd = 0;
        foreach ($body as $item) {
            // print_r($item);
            $indexCol = 1;
            $indexColIsi = 1;
            foreach ($item as $key => $value) {
                if ($index == 0) {
                    $sheet->setCellValue(Coordinate::stringFromColumnIndex($indexCol++) . '1', $key);
                    $rowCountEnd++;
                }
                $sheet->setCellValue(Coordinate::stringFromColumnIndex($indexColIsi++) . '' . $rowCount, $value);
            }
            $rowCount++;
            $index++;
        }
        $a = 1;
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
        $spreadsheet->getActiveSheet()->getStyle('A1:' . Coordinate::stringFromColumnIndex($rowCountEnd) . '1')->applyFromArray($styleArray);
        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = $fileName . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
