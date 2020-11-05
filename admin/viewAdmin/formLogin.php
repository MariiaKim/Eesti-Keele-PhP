<?php
if (isset($_SESSION['userId'])) {
    header('Location: login');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="./css/mystyle.css" rel="stylesheet" type="text/css" />
        <link href="./css/login.css" rel="stylesheet" type="text/css" />
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <form class="form-signin" role="form" action="login" method="POST">
                <h3 class="form-signin-heading">Input your data</h3>
                <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Login</button>
                <p style="padding-top: 10px;">
                    <?php
                    if (isset($_SESSION['errorString'])){
                        echo $_SESSION['errorString'];
                        unset($_SESSION['errorString']);
                    }
                    ?>
                </p>
                <p style="padding-top: 10px;"><a href="../">Web site</a></p>
            </form>
        </div>
    </body>
</html>
    
    