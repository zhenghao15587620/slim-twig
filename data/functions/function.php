<?php
/**
 * Created by PhpStorm.
 * User: luyan
 * Date: 2019/3/1
 * Time: 0:48
 */

function alert($var, $flag=true, $strict=true)
{
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output =  print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' .   htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($flag) {
        echo($output);
        exit;
    } else {
        echo($output);
    }
}

