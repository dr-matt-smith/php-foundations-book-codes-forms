<?php
//----- (1) retrieve 'address' -----
$address = filter_input(INPUT_GET, 'address');

//----- (2) delivery - set default value -----
$deliveryMethod = 'Standard Delivery';

//----- (2) retrieve 'address' if present -----
// IF
// a variable exists named "isExpress" in the GET data
// THEN
// set confirmation string to express delivery
if (filter_has_var(INPUT_GET, 'isExpress')){
    $deliveryMethod = 'Express Delivery';
}

//----- (3) choose display script based on validation -----
if(empty($address)){
    $message = '[address] value was empty or missing';
    require_once __DIR__ . '/../views/displayError.php';
} else {
    require_once __DIR__ . '/../views/confirmation.php';
}

