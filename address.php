<?php
    session_start();
 $_SESSION["firstN"] = $_POST["firstN"];
 $_SESSION["lastN"] = $_POST["lastN"];
 $_SESSION["email"] = $_POST["email"];
 $_SESSION["date"] = $_POST["date"];
 $_SESSION["yes"] = $_POST["yes"];
 $_SESSION["no"] = $_POST["no"];
 $_SESSION["ter"] = $_POST["ter"];
 $_SESSION["shoes"] = $_POST["shoes"];
//echo $_SESSION["firstN"];
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
    <h1>Address Page</h1>
    <body>
        <form action="shipping.php" method="POST">
    <p>Hi  <?php echo $_SESSION["firstN"]?><p>
        
   <label>Address:</label>
   <input type="text"  name="address" autofocus required maxlenths="100"><br><br>  
   
   <label>City:</label>
   <input type="text"  name="city" autofocus required maxlenths="20"><br><br>  
 
    <label>Province:</label>
    <select name="province">
		<option value="ON">ON</option>
		<option value="QC">QC</option>
		<option value="NL">NL</option>
                <option value="PE">PE</option>
                <option value="NS">NS</option>
                <option value="NB">NB</option>
                <option value="MB">MB</option>
                <option value="SK">SK</option>
                <option value="AB">AB</option>
                <option value="BC">BC</option>
                <option value="YT">YT</option>
                <option value="NT">NT</option>
                <option value="NU">NU</option>
					</select><br><br>
                                        
    <label>Postal Code:</label>
    <input type="text"  name="postal" autofocus required maxlenths="20" 
           pattern="[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}[0-9]{1}" maxlength="6"><br><br>  
    
    <input type="submit" value="Submit">
        </form>
    </body>
</html>