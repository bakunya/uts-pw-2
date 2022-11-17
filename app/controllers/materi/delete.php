<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/materi/delete_one.php';

$values = parse_form('id id_mata_kuliah', '/materi', $_GET, 'id_mata_kuliah=' . $_GET['id_mata_kuliah']);
$error = delete_one($values['id'], $values['id_mata_kuliah']);

if ($error) return redirect(500, '/materi', 'status=error&message=Ups,something wrong ... &id_mata_kuliah=' . $_GET['id_mata_kuliah']);
redirect(201, '/materi', 'status=success&message=berhasil menghapus data&id_mata_kuliah=' . $_GET['id_mata_kuliah']);
