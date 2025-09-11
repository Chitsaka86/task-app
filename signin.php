<?php
require'Classautoloader.php';

$ObjLayout->header($conf);
$ObjLayout->navbar($conf);
$ObjLayout->banner($conf);
$ObjUser->form_content($conf);
$ObjLayout->footer($conf);