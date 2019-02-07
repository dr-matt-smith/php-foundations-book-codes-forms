<?php
// index.php :: our 'front controller'

// (1) get value of 'action' from GET (or POST if not in GET)
$action = filter_input(INPUT_GET, 'action');
if(empty($action)){
    $action = filter_input(INPUT_POST, 'action');
}

// (2) decide what to do based on value of 'action;
switch($action) {
    // process the form
    case 'form1Process':
        require_once __DIR__ . '/../src/form1Process.php';
        break;

    // display the form
    case 'form1':
    default:
        require_once __DIR__ . '/../views/form1.php';
        break;

//    default:
//        print "action not recognised: [$action]";
}
