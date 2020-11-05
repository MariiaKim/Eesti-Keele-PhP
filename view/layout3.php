<html>
    <head>
        <title>Exercise</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <p class="vih"><a href="./"><img src="image/7.png"></a></p>
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