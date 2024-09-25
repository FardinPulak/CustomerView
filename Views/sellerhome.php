<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id'])) {
    header("location:../Views/sellerlogin.php");
    exit;
} else {
    $res = data($_SESSION['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
</head>
<body>
    <h2>Seller Dashboard</h2>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php while($r = $res->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $r['p_id']; ?></td>
            <td><?php echo $r['Name']; ?></td>
            <td><?php echo $r['Price']; ?></td>
            <td><?php echo $r['Details']; ?></td>
            <td>
                <form action="../Controllers/sellerhomeController.php" method="POST">
                    <button name="delete" value="<?php echo $r['p_id']; ?>">Delete</button>
                </form>
                </td>
                <td>
                <form action="../Controllers/sellerhomeController.php" method="POST">
                    <button name="edit" value="<?php echo $r['p_id']; ?>">Edit</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>

    <form method="post">
        <button type="submit" name="Insert">Insert New Product</button>
    </form>
    <?php
    if (isset($_POST['Insert'])) {
    ?>
    <fieldset>
        <legend>Insert New Product</legend>
        <form method="post" action="../Controllers/sellerhomeController.php">
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td><input type="text" name="id" ></td>
                    <td><input type="text" name="name" ></td>
                    <td><input type="text" name="price" ></td>
                    <td><input type="text" name="details"></td>
                </tr>
            </table>
            <button name="Save1">Save</button>
        </form>
    </fieldset>
    <?php } ?>

    <?php 
 if(isset( $_SESSION['mes'])) 
       {
         echo $_SESSION['mes']; 
         unset($_SESSION['mes']);
       }
?>

</body>
</html>
