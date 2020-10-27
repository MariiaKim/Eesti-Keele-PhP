<?php


class Register {
    public function registerUser() {
        $controll = array(0=>false,1=>'error');
        if (isset($_POST['save'])){
            $errorString = "";
            $name = $_POST['name'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email){
                $errorString.= "Wrong Email<br />";
            }
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!$password || !$confirm || mb_strlen($password) < 6){
                $errorString.= "Password must be at least 6 letters or more";
            }
            if ($password!=$confirm){
                $errorString.= "Passwords don't match<br/>";
            }
            if (mb_strlen($errorString) == 0){
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $date = Date("Y-m-d");
         $sql = "INSERT INTO `user` (`id`, `login`, `email`,`password`,`status`, `registration_date`)"
                           . "VALUES (NULL, '$name', '$email', '$passwordHash', '$password', 'user', '$date')";
                echo $sql;
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
   

