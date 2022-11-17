<?php
$_SERVER['D_PATH'] = '/PW-2-UTS-4703';
$_SERVER['D_ROOT'] = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['D_PATH'];

require $_SERVER['D_ROOT'] . "/app/template/index.php";
render($_SERVER['D_ROOT'] . "/app/views/index.php");
