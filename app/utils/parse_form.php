<?php

function parse_form(String $fields, $redirect, $var, $query_str = '')
{
    $fields = explode(' ', $fields);
    $values = [];
    for ($i = 0; $i < count($fields); $i++) {
        $raw = @$var[$fields[$i]];

        if (empty($raw)) {
            redirect(422, $redirect, 'status=error&message=credensial tidak valid&' . $query_str);
            exit;
        }

        $raw = trim($raw);

        if (empty($raw)) {
            redirect(422, $redirect, 'status=error&message=credensial tidak valid&' . $query_str);
            exit;
        }

        $values[$fields[$i]] = htmlspecialchars($var[$fields[$i]]);
    }
    return $values;
}
