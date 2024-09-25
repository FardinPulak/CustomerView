<?php
session_start();
require_once('../Models/alldb.php');

if(isset($_POST['Registration'])){
    header("location:../Views/sRegistration.php");
}

if(isset($_POST['Submit'])){
    $id1=$_POST['id'];
    $name1=$_POST['name'];
    $email1=$_POST['email'];
    $pass1=$_POST['pass'];
    if(empty($id1)||empty($name1)||empty($email1)||empty($pass1)){
        $_SESSION['mes']="Insert all the information correctly";
        header("location:../Views/Sregistration.php");
    }
    else{
        $status=save($id1,$name1,$email1,$pass1);
        if($status)
	{
		header("location:../Views/sellerlogin.php");
        $_SESSION['mes']="Saved Successfully";

	}
    }
}

if(isset($_POST['Login'])){
    $id=$_POST['ID'];
    $pass=$_POST['password'];
    
    if(empty($id || $pass))
    {
       $_SESSION['mes']="Please fill up the form";
       header("location:../Views/sellerlogin.php");
    }
    
    else
    {
        $status=authseller($id,$pass);
        if(mysqli_num_rows($status)==1)
        {
            header("location:../Views/sellerhome.php");
            $_SESSION['id']=$id;
        }
        else
        {
            $_SESSION['error']="Invalid User";
            header("location:../Views/sellerlogin.php");
        }
    }
}




?>