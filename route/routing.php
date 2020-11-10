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

// Выбор одного упражнения (типа упражнения)
elseif ($path == 'exercisetype' and isset($_GET['id'])) {
    $response = Controller::ExerciseByCatID($_GET['id']);
}
// Ответ на упражнение
elseif ($path == 'exerciseAnswer' and isset($_GET['id']) and isset($_GET['q'])){
    $response = Controller::exerciseAnswer($_GET['id'],$_GET['q']);
}

// обратная связь
elseif ($path == 'abi'){
     $response = Controller::AbiUser();
     }
// Правила игры     
elseif ($path == 'info'){
     $response = Controller::InfoPage();
     }

// Регистрация нового пользователя registration form
elseif ($path == 'registerForm'){
    $response = Controller::registerForm();
}

// register user
elseif ($path == 'registerAnswer'){
    $response = Controller::registerUser();
}
else {
     $response = Controller::error404();
}


