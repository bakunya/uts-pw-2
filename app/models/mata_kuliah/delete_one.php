<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function delete_one($id)
{
    $query_str = "delete from mata_kuliah where id = '" . $id . "'";
    try {
        return !(mysqli_query(connect(), $query_str));
    } catch (\Throwable $th) {
        return true;
    }
}
