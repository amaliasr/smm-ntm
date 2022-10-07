<?php
function mobile_assets($param)
{
    $url = 'https://pt-bks.com/mobile/assets/' . $param;
    return $url;
}

function api_url($param)
{
    // $url = 'https://api.pt-bks.com/office/' . $param;
    $url = 'http://192.168.10.150/api.ntm/' . $param;
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
function is_gudang_sr()
{
    $ci = get_instance();
    $level = $ci->session->userdata('level');
    if ($level['id'] == 7) {
        return true;
    } else {
        return false;
    }
}
