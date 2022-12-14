<?php
	$id=$_GET['id'];
  $db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
  $result = $db->query("select * from `Accounts` where AccountID='$id'");
  $row = $result->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="accounts-update.php?id=<?php echo $id; ?>">
  <label>Username:</label><input type="text" value="<?php echo $row['Username']; ?>" name="Username">
  <label>Password</label><input type="text" value="<?php echo $row['Password']; ?>" name="Password">
  <label>Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="Email">
  <label>Function:</label><select name="Function">
  <option value="Leerling">Leerling</option>
  <option value="Instructeur">Instructeur</option>
  <option value="Beheerder">Beheerder</option>
  </select>
		<input type="submit" name="submit">
		<a href="accounts-table.php">Back</a>
	</form>
</body>
</html>
