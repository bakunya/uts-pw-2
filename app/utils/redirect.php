<?php

function redirect(int $status, $location, $query_str = '')
{
    $path = empty($_SERVER['D_PATH']) ? '/PW-2-UTS-4703' : $_SERVER['D_PATH'];
    header("Status: " . $status);
    header("Location: " . $path . $location . "?" . $query_str);
    exit;
}
