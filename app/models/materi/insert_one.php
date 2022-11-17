<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function insert_one($values)
{
    $query_str = "insert into materi (id_mata_kuliah, pertemuan, judul, konten) values ('" . $values['id_mata_kuliah'] . "', '" . $values['pertemuan'] . "', '" . $values['judul'] . "', '" . $values['konten'] . "')";

    try {
        return !(mysqli_query(connect(), $query_str));
    } catch (\Throwable $th) {
        return true;
    }
}
