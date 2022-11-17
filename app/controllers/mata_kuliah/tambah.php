<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/insert_one.php';

$values = parse_form('mata_kuliah deskripsi', '/mata_kuliah/tambah.php', $_POST);
$error = insert_one($values);

if ($error) return redirect(500, '/', 'status=error&message=Ups,something wrong ...');
redirect(201, '/mata_kuliah/tambah.php', 'status=success&message=berhasil menambah data');
