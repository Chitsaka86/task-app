<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conf['site_timezone'] = 'Africa/Nairobi';

$conf['site_name'] = 'ICS B Academy Wings';
$conf['site_url'] = 'http://localhost/icsb/';
$conf['site_email'] = 'adminwings@academy.com';
$conf['site_email_name'] = 'Academy Wings Admin';

$conf['site_lang'] = 'en';
require_once __DIR__ . '/Lang/' . $conf['site_lang'] . '.php';

$conf['db_type'] ='pdo';

$conf['db_host'] = 'localhost'; 
$conf['db_user'] = 'root';
$conf['db_pass'] = '';
$conf['db_name'] = 'icsb';

$conf['mail_type'] = 'smtp'; //mail or smtp
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'icsmichelle@gmail.com';

$conf['smtp_pass'] = '';
$conf['smtp_port'] = 587;
$conf['smtp_secure'] = 'ssl'; //ssl or tls

$conf['min_password_length'] = 8;

$conf['valid_email_domain'] = ['academy.com', 'yahoo.com', 'gmail.com', 'outlook.com', 'hotmail.com', 'strathmore.edu'];

$conf['reg_ver_code'] = rand(100000, 999999);

$conf['ver_code_expiry'] = 10;