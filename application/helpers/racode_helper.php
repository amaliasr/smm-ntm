<?php
function mobile_assets($param)
{
    $url = 'https://pt-bks.com/mobile/assets/' . $param;
    return $url;
}

function api_url($param)
{
    // $url = 'https://api.pt-bks.com/office/' . $param;
    $url = 'http://192.168.10.199/api/office/' . $param;
    return $url;
}

function api_fa($param)
{
    $url = 'http://192.168.10.116/api.mk/' . $param;
    // $url = 'http://localhost/api/mk/' . $param;
    return $url;
}

function api_mk($param)
{
    // $url = 'http://192.168.10.116/api.fa/' . $param;
    $url = 'http://192.168.10.116/api.mk/' . $param;
    return $url;
}
function api_hrd($param)
{
    // $url = 'http://192.168.10.116/api.fa/' . $param;
    $url = 'http://192.168.10.116/api.hrd/' . $param;
    return $url;
}
