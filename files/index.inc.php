<?php

function get_csv($file)
{
    $ret = true;
    $r = strpos($file, '.csv');
    if ($r === false) {
        $ret = false;
    }
    return $ret;
}


$all_files = scandir('.');
$files = array_filter($all_files, "get_csv");

if(isset($_GET['file']) && !empty($_GET['file'])){
    $filename = $_GET['file'];
    $file_content = file($filename);
    $header = array_shift($file_content);
}
