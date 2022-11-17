<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function get_all()
{
    $query_str = "select * from mata_kuliah";

    try {
        $mysql = mysqli_query(connect(), $query_str);
        return mysqli_fetch_all($mysql);
    } catch (\Throwable $th) {
        die("Ups, something wrong ...");
    }
}
