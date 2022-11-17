<?php
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/utils/redirect.php';
require $_SERVER['D_ROOT'] . '/app/models/materi/belongs_to_mata_kuliah.php';

function get_detail()
{
    $values = parse_form('id', '/', $_GET);
    return belongs_to_mata_kuliah($values['id']);
}
