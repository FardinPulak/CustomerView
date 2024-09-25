<?php
require_once('../Models/alldb.php');
session_start();

$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];

if(empty($id || $name || $email ||$pass))
{
    $_SESSION['error']="Please fill up the form";
    header("location:../Views/sellerReg.php");
}

if(isset($_POST['reg']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $status=sreg($id, $name, $email, $pass);
    if($status)
    {
        header("location:../Views/sellerReg.php");
        $_SESSION['succ']="Successfully Registered";
    }
    else
    {
         header("location:../Views/sellerReg.php");
        $_SESSION['succ']="Faild to Registered";
    }
}


?>