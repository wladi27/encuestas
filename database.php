<?php

$connection = new mysqli('localhost', 'root', '', 'tasks-database');
//  $mysqli->set_charset("utf8");
 if ($connection->connect_errno) {
     die('fail');
 }
// $con = new mysqli('nameserversip.com', 'vicalidc_root', 'Admin.luis1234', 'vicalidc_pdf');
// if ($con->connect_errno) {
//   die('fail');
// }

function file_name($string) {

    // Tranformamos todo a minusculas

    $string = strtolower($string);

    //Rememplazamos caracteres especiales latinos

    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

    $repl = array('a', 'e', 'i', 'o', 'u', 'n');

    $string = str_replace($find, $repl, $string);

    // Añadimos los guiones

    $find = array(' ', '&', '\r\n', '\n', '+');
    $string = str_replace($find, '-', $string);

    // Eliminamos y Reemplazamos otros carácteres especiales

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

    $repl = array('', '-', '');

    $string = preg_replace($find, $repl, $string);

    return $string;
}

?>
