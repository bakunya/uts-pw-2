<?php

if (!function_exists('connect')) {
    require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";
}

function get_one($id)
{
    $query_str = "select * from mata_kuliah where id = '" . $id . "'";
    try {
        $mysql = mysqli_query(connect(), $query_str);
        return mysqli_fetch_assoc($mysql);
    } catch (\Throwable $th) {
        die('Ups, something wrong ...');
    }
}
