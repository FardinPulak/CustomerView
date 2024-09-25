<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
</head>
<body>
    <h1>Now fill all the information to register your account</h1>
    <form method="post" action="../Controllers/cusRegCheckController.php">
        <fieldset>
            <legend>Registration</legend>
            <pre>
            ID:     <input type="text" name="id"><br>
  	        Name:   <input type="text" name="name"><br>
  	        Email:  <input type="text" name="email"><br>
        	Pass:   <input type="password" name="pass"><br>
            </pre>

            <button name="reg">Register</button> 
            if you have any accout!!<a href="../Views/customerlogin.php">Log in</a>
        </fieldset>
    </form>
    <?php 
    if(isset( $_SESSION['succ'])) 
       {
         echo $_SESSION['succ']; 
         unset($_SESSION['succ']);
       }
    ?>
    
</body>
</html>