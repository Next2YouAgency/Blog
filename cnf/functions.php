<?php
/* * ***************************
  GERAR RESUMOS
 * *************************** */
function Resumo($string, $words = '55') {
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos);
    }
}