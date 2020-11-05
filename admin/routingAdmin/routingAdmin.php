<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php'){
    // Main page
    $response = controllerAdmin::formLoginSite();
}
// ---- Login, Logout ----
elseif ($path === 'login'){
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