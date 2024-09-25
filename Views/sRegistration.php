<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
</head>
<body>
    <h3>Seller Registration</h3>
<?php 
 if(isset( $_SESSION['mes'])) 
       {
         echo $_SESSION['mes']; 
         unset($_SESSION['mes']);
       }
?>
    <form action="../Controllers/sLogincheckContoller.php" method="POST">
    <pre>
    ID:       <input type="text"  name="id"><br><br>
    Name:     <input type="text"  name="name"><br><br>
    Email:    <input type="text"  name="email"><br><br>
    Password: <input type="text"  name="pass"><br><br>
    <button name="Submit">Submit</button>
    </pre>
    </form>

    
</body>
</html>