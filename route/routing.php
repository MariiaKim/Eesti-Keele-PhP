<?php
$host = explode ('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode ('/', $host)[$num];
if ($path == '' OR $path == 'index' OR $path == 'index.php'){
    $response = Controller::StartSite();
}
elseif ($path == 'category'){//оставим для type ???????????
     $response = Controller::AllCategory();
}

// Новый код для теста новой ветки в Гите
elseif ($path == 'category2'){
     $response = Controller::AllCategory();
}
//  мария Новый код для теста новой ветки в Гите
elseif ($path == 'category2'){
     $response = Controller::AllCategory();
}

elseif ($path == 'registerForm'){
    // registration form
    $response = Controller::registerForm();
}
elseif ($path == 'registerAnswer'){
    // register user
    $response = Controller::registerUser();
}


else {
     $response = Controller::error404();
}


