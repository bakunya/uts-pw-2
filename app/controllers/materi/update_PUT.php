<?php
require $_SERVER['D_ROOT'] . "/app/utils/redirect.php";
require $_SERVER['D_ROOT'] . '/app/utils/parse_form.php';
require $_SERVER['D_ROOT'] . '/app/models/materi/update_one.php';

try {
    $values = parse_form('id pertemuan judul konten id_mata_kuliah', '/materi/update.php', $_POST, 'id=' . $_POST['id']);
    $error = update_one($values);

    if ($error) return redirect(500, '/materi/update.php?', 'status=error&message=Ups, something wrong ...&id=' . $values['id']);
    redirect(201, '/materi', 'status=success&message=berhasil mengupdate data&id_mata_kuliah=' . $values['id_mata_kuliah']);
} catch (\Throwable $th) {
    die('Ups, something wrong ...');
}
