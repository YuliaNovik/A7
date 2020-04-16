<?php
session_start();
 $_SESSION["firstN"];
 $_SESSION["lastN"];
 $_SESSION["email"];
 $_SESSION["date"];
 $_SESSION["yes"];
 $_SESSION["no"] ;
 $_SESSION["ter"];
 $_SESSION["shoes"];
 $_SESSION["address"];
 $_SESSION["city"];
 $_SESSION["province"];
 $_SESSION["postal"];
 $_SESSION["ship"] ;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Yulia Novikova</title>
    </head>
    <body>
        <p>Order successfully place.</p>
        <p>Thank you for your order!</p>
        <p>Session data destroyed</p>
        <a href="http://novikovy.dev.fast.sheridanc.on.ca/A7/index.php">Home Page!</a>
    <?php session_destroy(); ?>
    </body>
</html>