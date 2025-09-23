<?php
 
require 'Classautoloader.php';

$tryemail = [
    'name_from' => 'sender',
    'mail_from' => 'sender@gmail.com',
    'name_to' => 'receiver',
    'mail_to' => 'receiver@gmail.com',
    'subject' => 'Hello from ICS B',
    'body' => 'Welcome to ICS B <br> This is a new semester. Let\'s have fun together.',
];

//$ObjSendEmail->sendEmail($conf,$tryemail);

print rand(100000, 999999);