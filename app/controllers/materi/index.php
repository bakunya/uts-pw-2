<?php
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/utils/redirect.php';
require $_SERVER['D_ROOT'] . '/app/models/materi/get_filtered.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/get_one.php';

function get_all_data()
{
    $values = parse_form('id_mata_kuliah', '/', $_GET);
    return get_filtered($values['id_mata_kuliah']);
}

function get_mata_kuliah()
{
    $values = parse_form('id_mata_kuliah', '/', $_GET);
    return get_one($values['id_mata_kuliah']);
}
