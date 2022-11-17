<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/models/conn.php";

function delete_one($id, $id_mata_kuliah)
{
    $query_str = "delete from materi where id = '" . $id . "' and id_mata_kuliah = '" . $id_mata_kuliah . "'";
    try {
        return !(mysqli_query(connect(), $query_str));
    } catch (\Throwable $th) {
        return true;
    }
}
