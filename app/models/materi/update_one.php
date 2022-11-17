<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function update_one($values)
{
    $query_str = "update materi set konten = '" . $values['konten'] . "', pertemuan = '" . $values['pertemuan'] . "', judul = '" . $values['judul'] . "' where id = '" . $values['id'] . "'";

    try {
        return !(mysqli_query(connect(), $query_str));
    } catch (\Throwable $th) {
        return true;
    }
}
