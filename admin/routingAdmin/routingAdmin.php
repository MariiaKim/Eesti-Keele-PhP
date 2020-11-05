<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];
print_r($host);
echo ' ';
print_r($path);


if ($path == '' OR $path == 'index.php'){
    echo 'Routing -> Главная страница - форма логина';
    // Main page
    $response = controllerAdmin::formLoginSite();
}
// ---- Login, Logout ----
elseif ($path === 'Vhod'){
    echo 'Routing -> login -> Запуск функции loginAction';
    sleep(10);
    // Login form
    $response = controllerAdmin::loginAction();
}
 elseif ($path == 'logout') {
     // Logout
     $response = controllerAdmin::logoutAction();
}
else {
    // Page not found
    $response = controllerAdmin::error404();
}