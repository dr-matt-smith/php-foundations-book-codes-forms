<?php
//----- (1) LOGIC -----
$name = filter_input(INPUT_GET, 'name');
?>


<!-- (2) HTML template output -->
<!doctype html>
<html><head><title>process</title></head>
<body>

Hello <?= $name ?>