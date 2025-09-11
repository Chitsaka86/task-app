<?php

require __DIR__ . '/vendor/autoload.php';
require 'conf.php';
$directories = ['Layouts', 'Forms', 'SendMails',];

spl_autoload_register(function ($className) use ($directories) {
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . '/' . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

$ObjectSendMail = new SendMails();
$ObjLayout = new Layouts();
$ObjForm = new Forms();