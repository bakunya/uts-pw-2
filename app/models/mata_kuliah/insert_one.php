<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function insert_one($values)
{
    $query_str = "insert into mata_kuliah (mata_kuliah, deskripsi) values ('" . $values['mata_kuliah'] . "', '" . $values['deskripsi'] . "')";

    try {
        return !(mysqli_query(connect(), $query_str));
    } catch (\Throwable $th) {
        return true;
    }
}
