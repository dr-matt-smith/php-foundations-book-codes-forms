<?php
//----- (1) LOGIC -----
$name = filter_input(INPUT_GET, 'name');

//----- (2) read and process the display script -----
require_once __DIR__ . '/../views/displayHello.php';