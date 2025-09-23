<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 require 'ClassautoLoader.php';

    $ObjLayout->header($conf);
    $ObjLayout->navbar($conf);
    $ObjLayout->banner($conf);
    $ObjLayout->content($conf);
    $ObjLayout->footer($conf);