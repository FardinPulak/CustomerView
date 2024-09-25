<?php
session_start();
require_once('../Models/alldb.php');
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    $status=delete($id);
    if($status)
    {
    $_SESSION['mes']="Deleted";
    header("location:../Views/sellerHome.php");
    }
}

if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $status=add($id,$name,$email,$pass);
    if($status)
    {
        header("location:../Views/sellerHome.php");
        $_SESSION['succ']="Inserted";
    }
    else
    {
         header("location:../Views/sellerHome.php");
        $_SESSION['succ']="Not Inserted";
    }
}

?>