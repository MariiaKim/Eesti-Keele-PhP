<?php
class modelAdmin {
    // admin authentification
    public static function userAuthentication() {
        echo 'ModelAdmin -> Проверка логина';
        if(isset($_SESSION['sessionId'])){
            $logIn=true;
        }
        else {
            $logIn=false;
            if(isset($_POST['btnLogin'])){
                if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!=""){
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    //$password = filter_input(INPUT_POST, 'password');
                    $sql = 'SELECT * FROM `users` WHERE `email`="'.$email.'"';
                    $db = new database();
                    $item = $db->getOne($sql);
                    
                    if ($item!=null){
                        $loginEmail = strtolower($_POST['email']);
                        $password = $_POST['password'];
                        if ($loginEmail == $item['email'] && password_verify($password, $item['parol'])){
//                            echo 'Login success!!!';
                            $_SESSION['sessionId'] = session_id();
                            $_SESSION['userId'] = $item['id'];
                            $_SESSION['name'] = $item['login'];
                            $_SESSION['status'] = $item['status'];
                            $_SESSION['email'] = $item['email'];
                            $logIn = true;
                        }
                    }
                }
            }
        }
        return $logIn;
    }
    
    // Admin dashboard logout
    public static function userLogout() {
        unset($_SESSION['sessionId']);
        unset($_SESSION['userId']);
        unset($_SESSION['name']);
        unset($_SESSION['status']);
        unset($_SESSION['email']);
        session_destroy();
        return;
    }
    
    // User Profile
    public static function getUserData() {  
        $sql = 'SELECT * FROM `users` WHERE `email`="'.$_SESSION['email'].'"';
        $db = new database();
        $user = $db->getOne($sql);
        return $user;
    }
}