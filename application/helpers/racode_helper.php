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
    if ($divisi_id == 7 || $divisi_id == 35) {
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
function job_spv_smd()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 7) {
        return true;
    } else {
        return false;
    }
}
function job_foreman()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 84 || $job_title_id == 87 || $job_title_id == 135) {
        return true;
    } else {
        return false;
    }
}
function job_logistik_warehouse()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 111) {
        return true;
    } else {
        return false;
    }
}
function job_supply_sparepart()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 113) {
        return true;
    } else {
        return false;
    }
}
function job_admin_ntm()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 13) {
        return true;
    } else {
        return false;
    }
}
function job_mekanik_packer()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 88) {
        return true;
    } else {
        return false;
    }
}
function job_spv_audit_internal()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 108) {
        return true;
    } else {
        return false;
    }
}
