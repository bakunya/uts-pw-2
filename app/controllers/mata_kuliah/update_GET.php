<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/get_one.php';

function get_current_data()
{
    $values = parse_form('id', '/', $_GET);
    return get_one($values['id']);
}
