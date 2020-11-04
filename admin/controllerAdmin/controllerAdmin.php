<?php
class controllerAdmin {
    public static function formLoginSite() {
        include_once ('viewAdmin/formLogin.php');
    }
    
    // Admin authentification form
    public static function loginAction() {
        $logIn= modelAdmin::userAuthentication();
        if(isset($logIn) and $logIn == 'ture'){
            include_once('viewAdmin/startAdmin.php');
        }
        else {
            $_SESSION['errorString']='Wrong login username or password';
            include_once ('viewAdmin/formLogin.php');
       }
    }
    
    // Admin panel logout
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once ('viewAdmin/formLogin.php');
    }
}