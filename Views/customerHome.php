<?php
require_once('../Models/alldb.php');
session_start();
$res = p_data();
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<form method="post">
		<table border="2">
			<tr>
				<th>Product ID</th>
				<th>Name</th>
				<th>option</th>
				
			</tr>
			<?php while ($r = $res->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $r['p_id']; ?></td>
					<td><?php echo $r['Name']; ?></td>

					<form action="../Controllers/cusHomeController.php">
						<td><button name="detail" value="<?php echo $r['p_id'] ?>">Details</button></td>
					</form>
				</tr>
			<?php } ?>
		</table>

</form>


<form action="../Controllers/cusHomeController.php">
	<button type="submit" name="logout">Logout</button>
</form>
</body>

</html>