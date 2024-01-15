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
    // FEBY
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 7 || $job_title_id == 130) {
        return true;
    } else {
        return false;
    }
}
function job_foreman()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 84 || $job_title_id == 87 || $job_title_id == 135 || $job_title_id == 129) {
        return true;
    } else {
        return false;
    }
}
function job_foreman_skt()
{
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 129) {
        return true;
    } else {
        return false;
    }
}
function job_foreman_skm()
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
    //MAHADIKA & ALDIKE
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 111 || $job_title_id == 139) {
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
    // AUDIT
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 108) {
        return true;
    } else {
        return false;
    }
}
function job_accounting_and_tax()
{
    // IWAN & HANNY
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 133 || $job_title_id == 10) {
        return true;
    } else {
        return false;
    }
}
function job_administrasi_produksi()
{
    // DELYA
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 90) {
        return true;
    } else {
        return false;
    }
}
function job_spv_tax()
{
    // REZA
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 94) {
        return true;
    } else {
        return false;
    }
}
function job_admin_pga()
{
    // SINDI
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 140) {
        return true;
    } else {
        return false;
    }
}
function job_kepala_operator()
{
    // MEGA
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 147) {
        return true;
    } else {
        return false;
    }
}
function job_atasan()
{
    // MEGA
    $ci = get_instance();
    $job_title_id = $ci->session->userdata('job_title_id');
    if ($job_title_id == 81) {
        return true;
    } else {
        return false;
    }
}

// BUAT PER CONTROLLER
function if_smd_planning()
{
    if (job_spv_smd() || job_foreman() || job_supply_sparepart() || job_spv_audit_internal() || job_administrasi_produksi()) {
        return true;
    } else {
        return false;
    }
}
function if_create_smd_planning()
{
    if (job_spv_smd()) {
        return true;
    } else {
        return false;
    }
}
function if_draft_material()
{
    if (job_foreman()) {
        return true;
    } else {
        return false;
    }
}
function if_create_material_request()
{
    if (job_foreman()) {
        return true;
    } else {
        return false;
    }
}
function if_material_request()
{
    if (job_spv_smd() || job_foreman() || job_supply_sparepart() || job_logistik_warehouse() || job_spv_audit_internal() || job_administrasi_produksi()) {
        return true;
    } else {
        return false;
    }
}
function if_manage_material_request()
{
    if (job_logistik_warehouse() || job_foreman() || job_supply_sparepart() || job_spv_smd() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_warehouse()
{
    if (is_logistik() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_production()
{
    if (is_logistik() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_stok_gudang()
{
    if (is_logistik() || job_spv_audit_internal() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_payments()
{
    if (is_accounting() || is_fat() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_transaction()
{
    if (is_purchasing() || is_direktur() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_logistik()
{
    if (is_logistik() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_master()
{
    if (is_purchasing() || is_direktur() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_rekap()
{
    if (is_accounting() || is_direktur() || is_purchasing() || job_spv_audit_internal()) {
        return true;
    } else {
        return false;
    }
}
function if_report_po()
{
    if (is_accounting() || is_direktur() || is_purchasing() || job_spv_audit_internal() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_mutasi_gudang()
{
    if (is_accounting() || is_direktur() || is_logistik() || is_purchasing() || job_admin_ntm() || job_spv_audit_internal() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_opname()
{
    if (is_accounting() || is_direktur() || is_logistik() || is_purchasing() || job_spv_audit_internal() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_machine()
{
    if (job_logistik_warehouse() || job_foreman_skm() || job_spv_smd() || job_supply_sparepart() || job_spv_audit_internal() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_production()
{
    if (job_foreman_skm() || job_spv_smd() || job_supply_sparepart() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_production_worker()
{
    if (job_spv_smd() || job_foreman_skt() ||  job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_result_production()
{
    if (job_spv_smd() || job_foreman_skm() ||  job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_production_daily()
{
    if (job_spv_smd() || job_foreman_skt() ||  job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_person_earn()
{
    if (job_spv_smd() || job_foreman_skt() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_admin_pga() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_incomplete()
{
    if (job_spv_smd() || job_foreman_skt() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_person_quality()
{
    if (job_spv_smd() || job_foreman_skt() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_production_skt()
{
    if (job_spv_smd() || job_foreman_skt() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_report_leave_pass()
{
    if (job_spv_smd() || job_foreman_skt() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
function if_production_portal()
{
    // if (job_foreman() || job_administrasi_produksi() || job_spv_smd()) {
    return true;
    // } else {
    //     return false;
    // }
}
function if_machine_shelters()
{
    if (job_foreman_skm() || job_spv_smd()) {
        return true;
    } else {
        return false;
    }
}
function if_so_production()
{
    if (job_spv_smd() || job_foreman_skm() || job_spv_audit_internal() || job_accounting_and_tax() || job_spv_tax() || job_atasan()) {
        return true;
    } else {
        return false;
    }
}
