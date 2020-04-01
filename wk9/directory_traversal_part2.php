<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
print "<pre>";
if (file_exists($path)){
        print_r(scandir(basename($path, '.')));
}
else {
        print_r(scandir('.'));
}
print "</pre>";
?>