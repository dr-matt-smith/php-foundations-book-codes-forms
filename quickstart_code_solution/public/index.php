<?php
$action = filter_input(INPUT_GET, 'action');

switch($action){
    case 'about':
        require_once __DIR__ . '/../views/about.php';
        break;

    case 'form':
        require_once __DIR__ . '/../views/form.php';
        break;

    case 'processForm':
        require_once __DIR__ . '/../src/process.php';
        break;

    default:
        require_once __DIR__ . '/../views/homepage.php';
}