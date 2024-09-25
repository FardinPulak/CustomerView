<?php
session_start();
require_once('../Models/alldb.php');
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $status=delete($id);
    if($status)
    {
        $_SESSION['mes']="Deleted";
        header("location:../Views/sellerhome.php");
    }
}

if(isset($_POST['edit'])){
    $id=$_POST['edit'];
    header("location:../Views/selleredit.php?id={$id}");
}

if(isset($_POST['Submit2'])){
    $id1=$_POST['id'];
    $name1=$_POST['name'];
    $email1=$_POST['price'];
    $pass1=$_POST['details'];
    $status=updateinfo($id1,$name1,$email1,$pass1);
    if($status)
	{
		header("location:../Views/sellerhome.php");
        $_SESSION['mes']="Updated Successfully";

	}
    
}

if(isset($_POST['Save1'])){
    $id1=$_POST['id'];
    $name1=$_POST['name'];
    $price=$_POST['price'];
    $details=$_POST['details'];
    if(empty($name1)||empty($id1)||empty($price)||empty($details)){
        $_SESSION['mes']="Insert all the information correctly";
        header("location:../Views/sellerhome.php");
    }
    else{
        $status=saveproduct($id1,$name1,$price,$details);
    if($status)
	{
		header("location:../Views/sellerhome.php");
        $_SESSION['mes']="Saved Successfully";

	}
    }
}
?>