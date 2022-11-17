<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/materi/insert_one.php';

$values = parse_form('id_mata_kuliah pertemuan judul konten', '/materi/tambah.php', $_POST, 'id_mata_kuliah=' . $_POST['id_mata_kuliah']);
$error = insert_one($values);

if ($error) return redirect(500, '/', 'status=error&message=Ups,something wrong ...');
redirect(201, '/materi/tambah.php', 'status=success&message=berhasil menambah data&id_mata_kuliah=' . $_POST['id_mata_kuliah']);
