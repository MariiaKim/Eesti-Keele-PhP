<html>
    <head>
        <title>menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
  <body>  
<div class="zagl">
    <h2>Mängi ja õpi</h2>
    </div>
    <section>
         <div class="divBox">
             <ul class="submenu">
                 <?php
                     if(isset($content)){
                         echo $content;
                     }
                     else {echo '<h1>Content is gone!</h1>';}
             ?>
                 </ul>
         </div>
    </section>
        
  </body>