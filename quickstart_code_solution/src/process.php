    <?php
    // (1) Get values
    $id = filter_input(INPUT_GET, 'id');
    $title = filter_input(INPUT_GET, 'title');
    $category = filter_input(INPUT_GET, 'category');
    $price = filter_input(INPUT_GET, 'price');

    // (2) Validate
    $isValid = true;
    $errors = '';
    if(empty($id)){
        $isValid = false;
        $errors .= 'id, ';
    }
    if(empty($title)){
        $isValid = false;
        $errors .= 'title, ';
    }
    if(empty($category)){
        $isValid = false;
        $errors .= 'category, ';
    }
    if(empty($price)){
        $isValid = false;
        $errors .= 'price, ';
    }
    if(!is_numeric($price)){
        $isValid = false;
        $errors .= '<li>price must be a number ';
    }

    // (3) choose display script based on validation
    if(!$isValid){
        $message = 'Some form data was not valid <li>empty or missing fields: ' . $errors;
        require_once __DIR__ . '/../views/displayError.php';
    } else {
        require_once __DIR__ . '/../views/confirmData.php';
    }
