<?php
class controllerAdmin {
    public static function formLoginSite() {
        include_once ('viewAdmin/formLogin.php');
    }
    
    // Admin authentification form
    public static function loginAction() {
        $logIn= modelAdmin::userAuthentication();
        if(isset($logIn) and $logIn ){
            include_once('viewAdmin/startAdmin.php');
        }
        else {
            $_SESSION['errorString']='Неверный логин или пароль';
            include_once ('viewAdmin/formLogin.php');
       }
    }
    
    // Admin panel logout
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once ('viewAdmin/formLogin.php');
    }
}