<?php

 echo "xin chào";

    for ($i = 0; $i < 1000; $i++) {
        echo $i;
        $i++;
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php $today = date("F j, Y, g:i a"); ?>   
     <h1> bây giờ là: <?php echo date('Y-M-d h:i:s'); ?> </h1>

    
 </body>
 </html>
 