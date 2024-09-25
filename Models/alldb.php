<?php
require_once('db.php');

function check($id, $pass)
{
    $con=con();
    $sql="select * from customer where c_id='$id' and Pass='$pass'";
    $res=mysqli_query($con, $sql);
    return $res;
}

function scheck($id, $pass)
{
    $con=con();
    $sql="select * from seller where s_id='$id' and Pass='$pass'";
    $res=mysqli_query($con, $sql);
    return $res;
}

function reg($id,$name,$email,$pass)
{
	$con=con();
	$sql="INSERT INTO  customer (`c_id`, `Name`, `Email`, `Pass`) values ('$id','$name','$email','$pass')";
	$res=mysqli_query($con,$sql);
	return $res;
}

function sreg($id,$name,$email,$pass)
{
	$con=con();
	$sql="INSERT INTO  seller (`s_id`, `Name`, `Email`, `Pass`) values ('$id','$name','$email','$pass')";
	$res=mysqli_query($con,$sql);
	return $res;
}

function p_data()
{
	$con=con();
	$sql="select * from product";
	$res=mysqli_query($con,$sql);
	return $res;
}

function detail($id)
{
	$con=con();
	$sql="select * from product where p_id='$id'";
	$res=mysqli_query($con,$sql);
	return $res ;
}

function delete($id)
{
	$con=con();
	$sql="Delete from product where p_id='$id'";
	$res=mysqli_query($con,$sql);
	return $res ;
}
function add($id,$name,$email,$pass)
{
	$con=con();
	$sql="Insert into product values ('$id','$name','$email','$pass')";
	$res=mysqli_query($con,$sql);
	return $res;
}
?>