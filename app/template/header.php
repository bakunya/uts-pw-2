<?php

function html_header($title = "4703")
{
    $css_path = "/PW-2-UTS-4703/assets/bs/bs.min.css";

    echo '
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="' . $css_path . '">
            <title>' . $title . '</title>
        </head>
        
        <body>
    ';
}
