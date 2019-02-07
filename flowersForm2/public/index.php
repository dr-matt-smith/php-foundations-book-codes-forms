<?php
$action = filter_input(INPUT_GET, 'action');
if(empty($action)){
    $action = filter_input(INPUT_POST, 'action');
}

switch($action){
    case 'form':
        require_once __DIR__ . '/../views/form.php';
        break;

    case 'processForm':
        require_once __DIR__ . '/../src/process.php';
        break;

    default:
        require_once __DIR__ . '/../views/homepage.php';
}