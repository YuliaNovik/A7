<?php
session_start();
 echo $_SESSION["firstN"] ;
 echo $_SESSION["lastN"] ;
 echo $_SESSION["email"];
 echo $_SESSION["date"];
 echo $_SESSION["yes"];
 echo $_SESSION["no"] ;
 echo $_SESSION["ter"];
 echo $_SESSION["shoes"];
 echo $_SESSION["address"] = $_POST["address"]. "<br>";
 echo $_SESSION["city"] = $_POST["city"]. "<br>";
 echo $_SESSION["province"] = $_POST["province"]. "<br>";
 echo $_SESSION["postal"] = $_POST["postal"]. "<br>";
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
    <h1>Shipping Page</h1>
    <form action="confirmation.php" method="POST">
     <label>Please select your shipping method:</label><br>
     <label>Canada Post</label>
     <input type="radio" name="ship" value="Canada Post">
        <label>FedEx</label>
        <input type="radio" name="ship" value="FedEx">
        <label>UPS</label>
        <input type="radio" name="ship" value="UPS">
        
        <input type="submit" value="Submit" >
        </form>
    
        
    
    </body>
</html>