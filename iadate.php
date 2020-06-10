<?php
ob_start();
include 'jsoon.php';
$test = file_get_contents("http://localhost/Proiecte/TW/jsoon.php");
file_put_contents("test.txt", $test);
ob_end_clean();
$test=str_replace('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>',"","$test");
$test=str_replace('</body>
</html>',"","$test");
file_put_contents("test.txt", $test);


?>