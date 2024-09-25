<?php
require_once('../Models/alldb.php');
session_start();

$id= $_POST['id'];
$pass= $_POST['pass'];

if(empty($id || $pass))
{
    $_SESSION['error']="Please fill up the form";
    header("location:../Views/customerlogin.php");
}
else
{
    $status = check($id,$pass);
    if(mysqli_num_rows($status)==1)
    {
        header("location:../Views/customerHome.php");
        $_SESSION['id']=$id;
    }
    else
    {
        $_SESSION['error']="Invalid id or password";
        header("location:../Views/customerlogin.php");
    }
}
?>