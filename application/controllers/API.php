<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Api extends CI_Controller
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
    }
    public function index()
    {
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $status = $this->input->get('status');
        $nama = $this->input->get('nama');
        $no_doc = $this->input->get('no_doc');
        for ($i = 0; $i < count($nama); $i++) {
            $message = "*📝 Permintaan Tanda Tangan 📝*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , anda mendapatkan pesan untuk Tanda Tangan *" . $status . " " . $no_doc . "*
Silahkan klik link dibawah ini untuk melanjutkan proses tanda tangan


" . $link . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                // 'number' => $no_telp[$i],
                'number' => '081944946015',
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }

    public function sendOpname()
    {
        function tgl_indo($tanggal)
        {
            $bulan = array(
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
        }
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $nama = $this->input->get('nama');
        $tanggal = $this->input->get('tanggal');

        for ($i = 0; $i < count($nama); $i++) {
            $message = "*📦 JADWAL STOCK OPNAME 📦*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , Stock Opname akan dilakukan dengan rincian dibawah ini :

⏰ Waktu :
*" . tgl_indo($tanggal[$i]) . "*
🔗 Form Pengisian :
" . $link . "

Informasi Tambahan, Link dapat digunakan ketika sudah waktunya melakukan SO (sesuai jadwal)";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendPlanForeman()
    {
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $nama = $this->input->get('nama');
        $tanggal = $this->input->get('tanggal');
        for ($i = 0; $i < count($nama); $i++) {
            $message = "*📄 Planning Produksi Mingguan 📄*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , anda mendapatkan pesan List Detail Planning untuk tanggal *" . $tanggal . "*
Silahkan klik link dibawah ini untuk melihat detail Planning Produksi mingguan


" . $link . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendApprovalToSMD()
    {
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $nama = $this->input->get('nama');
        $nama_pembuat = $this->input->get('nama_pembuat');
        $tanggal = $this->input->get('tanggal');
        $kode = $this->input->get('kode');
        for ($i = 0; $i < count($no_telp); $i++) {
            $message = "*📄 Approval MATERIAL REQUEST 📄*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , anda mendapatkan pesan untuk persetujuan Material Request dari " . $nama_pembuat . ", kode Material *" . $kode . "*
Silahkan klik link dibawah ini untuk melakukan persetujuan


" . $link . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendMaterialToLogistik()
    {
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $nama = $this->input->get('nama');
        $kode = $this->input->get('kode');
        $type_name = $this->input->get('type_name');
        for ($i = 0; $i < count($no_telp); $i++) {
            $message = "*📄 MATERIAL REQUEST 📄*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , anda mendapatkan pesan untuk proses Material Request *" . $kode . "*
Silahkan klik link dibawah ini untuk melakukan proses Material *" . $type_name . "*


" . $link . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendPenerimaanToForeman()
    {
        $no_telp = $this->input->get('no_telp');
        $link = $this->input->get('link');
        $nama = $this->input->get('nama');
        $kode = $this->input->get('kode');
        for ($i = 0; $i < count($no_telp); $i++) {
            $message = "*📦 MATERIAL REQUEST ANDA TELAH DIPROSES LOGISTIK 📦*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , Material Request *" . $kode . "* telah diproses oleh Logistik.
Silahkan klik link dibawah ini untuk melakukan penerimaan Material


" . $link . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendNotifAfterReceiveMaterial()
    {
        $no_telp = $this->input->get('no_telp');
        $nama = $this->input->get('nama');
        $kode = $this->input->get('kode');
        $owner = $this->input->get('owner');
        for ($i = 0; $i < count($no_telp); $i++) {
            $message = "*📦 MATERIAL REQUEST " . $kode . " TELAH DITERIMA 📦*

Teruntuk Bpk/Ibu *" . $nama[$i] . "* , Material Request *" . $kode . "* telah diterima oleh foreman " . $owner . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $no_telp[$i],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function sendNotifWorkPlan()
    {
        $data = $this->input->get('data');
        // print_r($data);
        foreach ($data as $key => $value) {
            $message = "*📦 PRODUCTION ENTRY 📦*

Teruntuk Bpk/Ibu *" . $value['account_name'] . "* , Berikut merupakan entri produksi untuk 

Tanggal : *" . $value['date'] . "*
Mesin : *" . $value['machine_name'] . "*
Posisi : *" . $value['account_type'] . "*

Link Kerja : " . $value['link'] . "";
            $url = 'https://app.whacenter.com/api/send';
            $ch = curl_init($url);
            $data = array(
                'device_id' => '24dcb02247b3e46597329e21a48e13ee',
                'number' => $value['phone'],
                'message' => $message,
            );
            $payload = $data;
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        echo $result;
    }
    public function testWhatsapp()
    {
        $url = 'https://app.whacenter.com/api/send';
        $ch = curl_init($url);
        $data = array(
            'device_id' => '24dcb02247b3e46597329e21a48e13ee',
            'number' => '081944946015',
            'message' => 'test WA',
        );
        $payload = $data;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }
    public function settingCookie($title)
    {
        if (isset($_COOKIE['page_visit'])) {
            $jsonData = $_COOKIE['page_visit'];
            $array = json_decode($jsonData, true);
            if (isset($array[$title])) {
                // jika ada
                $array[$title] = $array[$title] + 1;
            } else {
                $array[$title] = 1;
            }
            $jsonData2 = json_encode($array);
            setcookie('page_visit', $jsonData2, time() + 3600 * 24 * 365); // Perbarui nilai cookie
        } else {
            $array[$title] = 1;
            $jsonData = json_encode($array);
            setcookie('page_visit', $jsonData, time() + 3600 * 24 * 365); // Buat cookie baru
        }
    }
}
