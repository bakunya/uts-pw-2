<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/mata_kuliah/update_one.php';

try {
    $values = parse_form('id mata_kuliah deskripsi', '/mata_kuliah/update.php', $_POST, 'id=' . $_POST['id']);
    $error = update_one($values);

    if ($error) return redirect(500, '/mata_kuliah/update.php?', 'status=error&message=Ups, something wrong ...&id=' . $values['id']);
    redirect(201, '/', 'status=success&message=berhasil mengupdate data');
} catch (\Throwable $th) {
    die('Ups, something wrong ...');
}
