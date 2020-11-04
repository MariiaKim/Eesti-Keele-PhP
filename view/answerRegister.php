<?php


ob_start();

if(isset($result)){
    if($result[0] == true){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Регитсрация прошла успешно</strong><a href="admin/"> Dashboard</a>
            </div>
        </div>
        <?php
    }
    else if($result[0] == false){
        ?>
        <div class="container">
             <div class="middle">
                <strong>Error! </strong><br>
                <?php echo $result[1];?><br>
                <a href="registerForm">Registration From</a>
            </div>
        </div>
        <?php
            
    }
}

//$content = ob_get_clean();
include 'view/formRegister.php';
//include 'view/layout2.php';
//include 'view/layout.php';?>

