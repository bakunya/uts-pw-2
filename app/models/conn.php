<?php

const DB_PASS = "root";
const DB_UNAME = "root";
const DB_HOST = "localhost";
const DB_NAME = "pw-2-uts-4703";

$mysqli = null;

function connect()
{
    if (!empty($mysqli)) return $mysqli;

    $mysqli = new mysqli(DB_HOST, DB_UNAME, DB_PASS, DB_NAME);

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    return $mysqli;
}
