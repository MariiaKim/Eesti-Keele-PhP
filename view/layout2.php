<html>
    <head>
        <title>menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
  <body>
      <p class="vih"><a href="./" class="menu__link menu__link"><img src="image/7.png"></a></p>
<div class="zagl">
    Mängi ja õpi
    </div>
    <section>
         <div class="divBox">
             
                 <?php
                     if(isset($content)){
                         echo $content;
                     }
                     else {echo '<h1>Content is gone!</h1>';}
             ?>

         </div>
    </section>
        
  </body>