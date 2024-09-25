<?php
session_start();
require_once('../Models/alldb.php');
if(isset($_GET['detail']))
{
    $id=$_GET['detail'];
    $status=detail($id);
    
}

if(isset($_GET['logout'])){
    header("location:../Views/customerlogin.php");
    }
?>