<?php
session_start();
 ?>

<?php 
 if(isset( $_SESSION['mes'])) 
       {
         echo $_SESSION['mes']; 
         unset($_SESSION['mes']);
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login</title>
</head>
<body>
    <h2>Seller</h2>
    <form action="../Controllers/sLogincheckContoller.php" method="POST">
        <pre>
        ID:       <input type="text"  name="ID"><br>
        Password: <input type="password"  name="password"><br>
        </pre>
        <button name="Registration">Registration</button> <button name="Login">Login</button>
    </form>
</body>
</html>