<?php

function html_footer()
{
    $bs_js_path = "/PW-2-UTS-4703/assets/bs/bs.min.js";
    $sw_js_path = "/PW-2-UTS-4703/assets/sw/sw.min.js";

    echo '
            <script src="' . $bs_js_path . '"></script>
            <script src="' . $sw_js_path . '"></script>
        </body>
        </html>
    ';
}
