<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<form method="POST" action="accounts-add.php">
			<label>Username:</label><input type="text" name="Username">
			<label>Password:</label><input type="text" name="Password">
			<br>
			<label>Email</label><input type="text" name="Email">
			<label>Function</label><input type="text" name="Function">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1" class='accountsTable'>
			<thead>
				<th>AccountID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Function</th>
				<th>resetpw_token</th>
			</thead>
			<tbody>
				<?php
					$db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
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
								<a href="accounts-edit.php?id=<?php echo $row['AccountID']; ?>">Edit</a>
								<a href="accounts-del.php?id=<?php echo $row['AccountID']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
