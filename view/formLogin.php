<html>
    
    <head>
        <meta charset="utf-8">
        <title>Register user</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="register">
   <a href="./"><img class="vih" src="image/7.png"></a>
  
  <meta charset="UTF-8">
  <title>Fancy Forms</title>
  
  
  
      <link rel="stylesheet" href="css/style1.css">

  
</head>
<body>
     <div class="container">
  <div class="middle">
  <div class="regis">Login Forms</div>
<form class="form-signin" action="login" method="POST">
 
  <div id="fancy-inputs">
   
      <label class="input" for="username">
      <input type="text" id="name" name="username" value="" required autofocus>
      <span><span>Username</span></span>
    </label>
     

      <label class="input" for="password">
      <input type="password"  id="password"  name="password" placeholder="Password">
      <span><span>password</span></span>
    </label>
    
  </div>
  
  <div id="fancy-radio">
       <?php
                   if (isset($_SESSION['errorString'])){
                        echo $_SESSION['errorString'];
                        unset($_SESSION['errorString']);
                    }
                    ?>
    
  </div>
  
<button type="submit" class="btn" name="btnLogin">sisse</button>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
     </div>
</body>

 <!--
 <body>
        <div class="container">
            <form class="form-signin" action="login" method="POST">
                <h3 class="form-signin-heading">Input your data</h3>
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Login</button>
                <p style="padding-top: 10px;">
                   // <?php
                  // if (isset($_SESSION['errorString'])){
                      //  echo $_SESSION['errorString'];
                       // unset($_SESSION['errorString']);
                  //  }
                    //?>
                </p>
                <p style="padding-top: 10px;"><a href="../">Web site</a></p>
            </form>
        </div>
    </body>
 -->
</html>


