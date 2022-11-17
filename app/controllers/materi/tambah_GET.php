<?php
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/utils/redirect.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/get_one.php';

function tambah_GET()
{
    $values = parse_form('id_mata_kuliah', '/', $_GET);
    return get_one($values['id_mata_kuliah']);
}
