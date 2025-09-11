<?php
 
require 'Classautoloader.php';

$tryemail = [
    'name_from' => 'Michelle Chitsaka',
    'mail_from' => 'chitsaka.gari@gmail.com',
    'name_to' => 'Academy Wings',
    'mail_to' => 'AcademyWings@gmail.com',
    'subject' => 'Hello from ICS B',
    'body' => 'Welcome to ICS B <br> This is a new semester. Let\'s have fun together.',
];

$ObjSendEmail->sendEmail($conf,$tryemail);