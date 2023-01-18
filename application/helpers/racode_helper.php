<?php
function mobile_assets($param)
{
    $url = 'https://pt-bks.com/mobile/assets/' . $param;
    return $url;
}

function api_url($param)
{
    $url = 'https://rest.pt-smm.com/api.ntm/' . $param;
    // $url = 'https://rest.pt-smm.com/api.ntm/' . $param;
    return $url;
}
function api_produksi($param)
{
    $url = 'https://rest.pt-smm.com/api.ntm/' . $param;
    return $url;
}
function is_login()
{
    $ci = get_instance();
    $login = $ci->session->userdata('logged_in');
    if ($login == 1) {
        return true;
    } else {
        return false;
    }
}

function is_accounting()
{
    $ci = get_instance();
    $divisi_id = $ci->session->userdata('division_id');
    if ($divisi_id == 8) {
        return true;
    } else {
        return false;
    }
}
function is_fat()
{
    $ci = get_instance();
    $divisi_id = $ci->session->userdata('division_id');
    if ($divisi_id == 9) {
        return true;
    } else {
        return false;
    }
}
function is_purchasing()
{
    $ci = get_instance();
    $divisi_id = $ci->session->userdata('division_id');
    if ($divisi_id == 4) {
        return true;
    } else {
        return false;
    }
}
function is_logistik()
{
    $ci = get_instance();
    $divisi_id = $ci->session->userdata('division_id');
    if ($divisi_id == 7) {
        return true;
    } else {
        return false;
    }
}
function is_direktur()
{
    $ci = get_instance();
    $divisi_id = $ci->session->userdata('division_id');
    if ($divisi_id == 10) {
        return true;
    } else {
        return false;
    }
}
