<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

function debug($x, $exit = 0)
{
    echo $res = "<pre>";
    if (is_array($x) || is_object($x)) {
        echo print_r($x);
    } else {
        echo var_dump($x);
    }
    echo "</pre><hr />";
    if ($exit == 1) {
        die();
    }
}