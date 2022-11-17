<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function get_filtered($id_mata_kuliah)
{
    $query_str = "select * from materi where id_mata_kuliah = '" . $id_mata_kuliah . "'";

    try {
        $mysql = mysqli_query(connect(), $query_str);
        return mysqli_fetch_all($mysql);
    } catch (\Throwable $th) {
        die("Ups, something wrong ...");
    }
}
