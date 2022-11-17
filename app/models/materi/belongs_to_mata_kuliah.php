<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function belongs_to_mata_kuliah($id)
{
    $query_str = "select materi.id as id, mata_kuliah, id_mata_kuliah, pertemuan, judul, konten from materi join mata_kuliah on mata_kuliah.id = materi.id_mata_kuliah where materi.id = '" . $id . "'";
    try {
        $mysql = mysqli_query(connect(), $query_str);
        return mysqli_fetch_assoc($mysql);
    } catch (\Throwable $th) {
        die('Ups, something wrong ...');
    }
}
