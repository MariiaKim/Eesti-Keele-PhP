<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <link href="./css/mystyle.css" rel="stylesheet" type="text/css" />
        <link href="./css/login.css" rel="stylesheet" type="text/css" />
<!--        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <?php
            if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"]))
            {
            ?>
            
            <div class="header clearfix">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <?php
//                        echo '<ul class="nav nav-pills pull-right">'
//                        . '<li role="button">'.$_SESSION["name"].
//                        '<a href="logout" style="display:inline;"> Logout'
//                        .'<i class="fa fa-sign-out"></i></a></li></ul>';
                        echo '<ul class="nav nav-pills pull-right btn-group" role="group">'
                        .'<li>'
                        .'<a href="userProfile" style="display:inline;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['name'].'</button></a>'
                        .'<a href="logout" style="display:inline;"><button type="button" class="btn btn-default">Logout <span class="glyphicon glyphicon-log-out"></span>'
                        .'</button></a></li></ul>';
                        
                        if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin"){
                            echo '<h4><a href="../" target=_blank>WEB SITE </a>';
                            echo ' &#187 <a href="./">Start Admin </a>';
                            echo '  &#187 <a href="categoryAdmin">News Categories</a>';
                            echo '  &#187 <a href="newsAdmin">News List</a>';
                            echo '</h4>';
                        } else{
                            echo '<h4><a href="../" target=_blank>WEB SITE </a>';
                            echo "<h4>Access denied. You haven't rights";
                        }
                        ?>
                        
                    </div>
                </nav>
            </div>
            <?php
            }
            ?>
            
            <div id="content" style="padding-top: 20px;">
                <?php echo $content; ?>
            </div>
            <footer class="footer">
                <p>&copy; 2020 Design Admin dashboard<i class="fa fa-child"></i></p>
            </footer>
    </body>
</html>
