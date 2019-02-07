<?php
// 1. process 'address' text (from GET data of HTTP request)

$address = filter_input(INPUT_GET, 'address');

// if nothing there, set address to message saying it was empty
if (empty($address)){
	$address = '(address was empty)';
}

// 2. process 'isExpress' checkbox (from GET data of HTTP request)

// set default value (i.e. if no checkbox for express delivery)
$expressDeliveryConfirmation = 'Standard Delivery';

// IF
// a variable exists named "isExpress" in the GET data
// THEN 
// set confirmation string to express delivery
if (filter_has_var(INPUT_GET, 'isExpress')){
	$expressDeliveryConfirmation = 'Express Delivery';

}

// 3. load in template, to output form confirmations to user
//----------------------------------------------------------
require_once __DIR__ . '/../views/confirmation.php';