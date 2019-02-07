<?php
$action = filter_input(INPUT_GET, 'action');

switch($action){
    case 'processForm':
        require_once __DIR__ . '/../src/process.php';
        break;

    default:
        require_once __DIR__ . '/../views/displayForm.php';
}