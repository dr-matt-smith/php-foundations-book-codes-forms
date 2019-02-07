<?php
//----- (1) LOGIC -----
$name = filter_input(INPUT_GET, 'name');

//----- (2) choose display script based on validation -----
if(empty($name)){
    $message = '[name] value was empty or missing';
    require_once __DIR__ . '/../views/displayError.php';
} else {
    require_once __DIR__ . '/../views/displayHello.php';
}
