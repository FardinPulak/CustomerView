<?php
require_once('../Models/alldb.php');
$id=$_GET['id'];
$res=newinfo($id);
$r=$res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
 <table border="1">
   <tr>
      <th>Id</th>
      <th>Name</th>
      <th>price</th>
      <th>Details</th>
   </tr>
   <form method="post" action="../Controllers/sellerhomeController.php">
   <tr>
      <th><input type="text" name="id" value="<?php echo $r['p_id'] ?>" readonly></th>
      <th><input type="text" name="name" value="<?php echo $r['Name'] ?>"></th>
      <th><input type="text" name="price" value="<?php echo $r['Price'] ?>"></th>
      <th><input type="text" name="details" value="<?php echo $r['Details'] ?>"></th>
   </tr>
   </table>
   <button name="Submit2" >Submit</button>
   </form>
   
</fieldset>
</body>
</html>
