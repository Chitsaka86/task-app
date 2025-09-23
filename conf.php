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
$conf['db_pass'] = 'michelle';
$conf['db_name'] = 'taskapp';

try {
    $dsn = "mysql:host=localhost;port=3307;dbname=" . $conf['db_host'] . ";dbname=" . $conf['db_name'] . ";charset=utf8mb4";
    $pdo = new PDO($dsn, $conf['db_user'], $conf['db_pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connected successfully.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$conf['mail_type'] = 'smtp'; //mail or smtp
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'michellechitsaka6@gmail.com';

$conf['smtp_pass'] = 'michellechitsaka6@gmail.com';
$conf['smtp_port'] = 587;
$conf['smtp_secure'] = 'ssl'; //ssl or tls

$conf['min_password_length'] = 8;

$conf['valid_email_domain'] = ['academy.com', 'yahoo.com', 'gmail.com', 'outlook.com', 'hotmail.com', 'strathmore.edu'];

$conf['reg_ver_code'] = rand(100000, 999999);

$conf['ver_code_expiry'] = 10;