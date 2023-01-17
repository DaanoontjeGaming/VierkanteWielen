<?php
session_start();
include('navbar.php');
$username = $_SESSION['Username'];
$db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
$query = $db->query("SELECT Function FROM Accounts where Username='$username'");
$result = $query->fetch(PDO::FETCH_ASSOC);
// if ($result['Function'] == 'Beheerder'){
// 	echo 'it works';
// } else{
// 	header('location: index.php');
// 	echo 'Je hebt geen rechten om hier te zijn boef!';
// }
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin panel CRUD</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="addFormDiv">
		<form method="POST" action="accounts-add.php" >
			<label>Username:</label><input type="text" name="Username">
			<label>Password:</label><input type="text" name="Password">
			<br>
			<label>Email:</label><input type="text" name="Email">
			<label>Function:</label><select name="Function">
			<option value="Leerling">Leerling</option>
			<option value="Instructeur">Instructeur</option>
			<option value="Beheerder">Beheerder</option>
			</select>
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1" class='styled-table'>
			<thead>
				<th>AccountID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Function</th>
				<th>rpwt</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php
					$query = $db->query("SELECT * FROM Accounts");
					while ($row = $query->fetch(PDO::FETCH_ASSOC)){?>
						<tr>
						<td><?php echo $row["AccountID"]; ?></td>
						<td><?php echo $row["Username"]; ?></td>
						<td><?php echo $row["Password"]; ?></td>
						<td><?php echo $row["Email"]; ?></td>
						<td><?php echo $row["Function"]; ?></td>
						<td><?php echo $row["resetpw_token"]; ?></td>
							<td>
								

								<button onclick="location.href='accounts-edit.php?id=<?php echo $row['AccountID']; ?>'" type="button">Edit</button>
								<button onclick="location.href='accounts-del.php?id=<?php echo $row['AccountID']; ?>'" type="button">Delete</button>
								<!-- <a href="accounts-edit.php?id=<?php echo $row['AccountID']; ?>">Edit</a> -->
								<!-- <a href="accounts-del.php?id=<?php echo $row['AccountID']; ?>">Delete</a> -->
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<?php include('footer.php')?>
</body>
</html>
