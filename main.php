<?php

/**
* Validation Phone number persian
*/
$json = [];
$phone = '09305000000';
//$phone = '00989305000000';
//$phone = '+989305000000';
$pattern_phone = "/^(0|0098|\+98)9(0[1-5]|[1 3]\d|2[0-2]|98)\d{7}$/i";
$phone = convert_number_english($_POST[$key]);
$res_is_phone = preg_match($pattern_phone,$phone);

if ($res_is_phone){
    $json['type']      = 'successful';
    $json['message']   = 'شماره همراه درست است';
    return $json;
}else{
    $json['type']      = 'error';
    $json['message']   = 'شماره همراه اشتباه است';
    return $json;
}
