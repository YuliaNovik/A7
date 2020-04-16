
<!DOCTYPE html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Yulia Novikova</title>
    </head>
    <h1>Customer Details</h1>
    <body>
        <form action="address.php" method="POST">
            
        <label>First name:</label>
        <input type="text"  name="firstN" autofocus required maxlenths="50"><br><br>  
        
         <label>Last name:</label>
        <input type="text" name="lastN" autofocus required maxlength="50"><br><br> 
        
         <label>Email:</label>
         <input type="email" name="email" autofocus required max="50" pattern=".*['a-zA-z-0-9#_&$']+@*."><br><br> 
         
        <label>Date:</label>
        <input type="date" name="date" required><br><br>
        
        <label>Runner: </label>
        <input type="checkbox" name="yes" value="yes">
        <label>yes</label>
        <input type="checkbox" name="no" value="no">
        <label>no</label><br><br>
        
        <label>Your favourite terrain:</label><br>
        <input type="radio" name="ter" value="Road">
        <label>Road</label><br>
        <input type="radio" name="ter" value="Track">
        <label>Track</label><br>
        <input type='radio' name='ter' value="Trail">
        <label>Trail</label><br><br>
        
        <label>Rank your current shoes from 1 to 10:</label>
        <input type="number" name="shoes" max="10" min="1" required=""><br><br>
        <input type="submit" value="Submit">
        </form>
    </body>
    
</html>

