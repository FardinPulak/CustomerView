<?php
require_once('../Models/alldb.php');
session_start();
$res = p_data();
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
            <th>Actions</th>
        </tr>
        <?php while($r = $res->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $r['p_id']; ?></td>
            <td><?php echo $r['Name']; ?></td>
            <td><?php echo $r['Price']; ?></td>
            <td><?php echo $r['Details']; ?></td>
            <td>
                <form action="../Controllers/sellerHomeController.php" method="POST">
                    <button name="delete" value="<?php echo $r['p_id']; ?>">Delete</button>
                </form>
                <form action="../Controllers/homeController.php" method="POST">
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
                    <td><input type="text" name="id" required></td>
                    <td><input type="text" name="name" required></td>
                    <td><input type="text" name="price" required></td>
                    <td><input type="text" name="details" required></td>
                </tr>
            </table>
            <button name="Save1">Save</button>
        </form>
    </fieldset>
    <?php } ?>

</body>
<?php 
 if(isset( $_SESSION['succ'])) 
       {
         echo $_SESSION['succ']; 
         unset($_SESSION['succ']);
       }
?>
</html>
