<?php
session_start();
echo $_SESSION["firstN"];
 echo $_SESSION["lastN"];
 echo $_SESSION["email"];
 echo $_SESSION["date"];
 echo $_SESSION["yes"];
 echo $_SESSION["no"] ;
 echo $_SESSION["ter"];
 echo $_SESSION["shoes"];
 $_SESSION["address"];
 $_SESSION["city"];
 $_SESSION["province"];
 $_SESSION["postal"];
 $_SESSION["ship"] = $_POST["ship"];
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Yulia Novikova</title>
    </head>
    <h1>Confirmation Page</h1>
    <body>
        <form action="order.php" method="POST">
            <h3>Customer Details:</h3>
            <p>First name:<?php echo  $_SESSION["firstN"]?></p>
            <p>Last name:<?php echo $_SESSION["lastN"]?></p>
            <p>Email:<?php echo $_SESSION["email"]?></p>
            <p>Date:<?php echo $_SESSION["date"]?></p>
            <p>Runner:<?php 
            echo $_SESSION["yes"];
             echo $_SESSION["no"] 
                     ?></p>
            <p>
                <?php if (isset($_SESSION["yes"])) echo "Favourite Terrain: ". $_SESSION["ter"]; 
                
           // echo $_SESSION["ter"]
                    ?></p>
            <p>Rate your shoes:<?php echo $_SESSION["shoes"]?></p><br>
            
            
            <h3>Address Details:</h3>
            <p>Address:<?php echo  $_SESSION["address"]?></p>
            <p>City:<?php echo $_SESSION["city"]?></p>
            <p>Province:<?php echo $_SESSION["province"]?></p>
            <p>Postal Code:<?php echo $_SESSION["postal"]?></p><br>
            
            <h3>Shipping Details:</h3>
            <p>Shipping method:<?php echo $_SESSION["ship"]?></p><br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>