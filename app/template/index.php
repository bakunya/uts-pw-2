<?php
require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/template/header.php";
require $_SERVER['DOCUMENT_ROOT'] . "/PW-2-UTS-4703/app/template/footer.php";

function render($view_path)
{

    html_header('Daftar Mata Kuliah');
    require $view_path;
    html_footer();
}
