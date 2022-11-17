<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/delete_one.php';

$values = parse_form('id', '/', $_GET);
$error = delete_one($values['id']);

if ($error) return redirect(500, '/', 'status=error&message=Data yang berelasi tidak bisa dihapus.');
redirect(201, '/', 'status=success&message=berhasil menghapus data');
