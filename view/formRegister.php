<html>
    
    <head>
        <meta charset="utf-8">
        <title>Register user</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
             <link rel="stylesheet" href="css/style1.css">
              <title>Fancy Forms</title>
    </head>
    <body class="register">
   <a href="./"><img class="vih" src="image/7.png"></a>
  

 
  
  
  
 

  



     <div class="container">
  <div class="middle">
  <div class="regis">Fancy Forms</div>
  <form class="form-horizontal" role="form" method="POST" action="registerAnswer">
       <div id="fancy-radio">
        <label class="input"  for="name" >
            <input type="text" id="name" name="name" value="" required autofocus="">
        <span><span>name</span></span>
    </label>
         <label class="input"  for="username" >
        <input type="text" id="username" name="username" value="" required>
        <span><span>username</span></span>
    </label>
        <label class="input"  for="email" >
        <input type="email" id="email" name="email" value="" required>
        <span><span>email</span></span>
    </label>

        <label class="input" for="password">
      <input type="text"  id="password"  name="password" required>
      <span><span>password</span></span>
    </label>
    <label class="input" for="password-confirm" >
      <input id="password-confirm" type="password"  name="confirm" required >
      <span><span>Ppassword-confirm</span></span>
    </label>
  </div>
  
<!--  <div id="fancy-radio">
    <input type="radio" name="gender" id="gender" class="pull-left" style="display: none;">
    <label class="radio questions" for="gender">Male</label>

    <input type="radio" name="gender" id="gender" class="pull-left" style="display: none;">
    <label class="radio photo" for="gender">Female</label>
  </div>-->
  
<button type="submit" class="btn" name="save">Register</button>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
     </div>
</body>

 
</html>
