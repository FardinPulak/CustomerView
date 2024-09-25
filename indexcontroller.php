<?php
if(isset($_GET['Customer'])){
header("location:../Views/customerlogin.php");
}
if(isset($_GET['Seller'])){
    header("location:../Views/sellerlogin.php");
}

?>