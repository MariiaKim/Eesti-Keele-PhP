<?php
class Register {
    public function registerUser() {
        $controll = array(0=>false,1=>'error');
        if (isset($_POST['save'])){
            $errorString = "";
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email){
                $errorString.= "Некорректный e-mail<br />";
            }
            $loginEmail = strtolower($email);
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!$password || !$confirm || mb_strlen($password) < 6){
                $errorString.= "Длина пароля должна быть не менее 6 символов";
            }
            if ($password!=$confirm){
                $errorString.= "Введенные пароли не совпадают<br/>";
            }
            if (mb_strlen($errorString) == 0){
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                //$date = Date("Y-m-d");
                
                $sql = "INSERT INTO `user` (`name`, `email`, `login`, `password`, `status`,pass)"
                        . "VALUES ('$name', '$loginEmail', '$username', '$passwordHash', 'user','$password')";
                $db = new database();
                $item = $db->executeRun($sql);
                if ($item)
                    $controll = array(0=>true);
                else
                    $controll = array(0=>false,1=>'error');
            }
            else {
                $controll = array(0=>false,1=>$errorString);
            }
        }
        return $controll;
    }
} // class Register end

?>