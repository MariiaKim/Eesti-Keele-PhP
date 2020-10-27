<?php
$host = explode ('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode ('/', $host)[$num];
if ($path == '' OR $path == 'index' OR $path == 'index.php'){
    $response = Controller::StartSite();
}
// Все категории упражнений
elseif ($path == 'category'){
    $response = Controller::AllCategory();
}

// Одно упражнение
elseif ($path == 'exercisetype' and isset($_GET['id'])) {
    $response = Controller::ExerciseByCatID($_GET['id']);
}

elseif ($path == 'abi'){
     $response = Controller::AbiUser();
     }
elseif ($path == 'info'){
     $response = Controller::InfoPage();
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


