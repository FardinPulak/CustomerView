<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Customer Login</title>
</head>
<body>
    <h2>Customer</h2>
    
	<form method="post" action="../Controllers/cusLoginCheckController.php">
        <fieldset>
            <legend>login</legend>
            <pre>
            ID :       <input type="text" name="id"><br>
            Password : <input type="password" name="pass"> <br> <br>
            </pre>
            <button name="login">Log in</button>
            if you don't have any accout!!<a href="../Controllers/customerRegController.php">Registration</a>

        </fieldset>

        <?php
       if(isset( $_SESSION['error'])) 
       {
       	echo $_SESSION['error']; 
       	unset($_SESSION['error']);
       }
       ?>
    </form>
</body>
</html>