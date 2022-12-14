

<body><center>
<div style="width:500px;">
<form name="frmUser" method="post">
<table border="0" cellpadding="20" cellspacing="2" width="500" margin='auto' class="tblListForm">
<tr class="head">
<td></td>
<td><h2>AccountID</h2></td>
<td><h2>Username</h2></td>
<td><h2>Password</h2></td>
<td><h2>Email</h2></td>
<td><h2>Function</h2></td>
<td><h2>resetpw_token</h2></td>

</tr>
<?php
$i=0;
$db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
$query = $db->query("SELECT * FROM Accounts");
// $result = $query->fetch();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
?>
<tr class="rows">
<td><input type="checkbox" name="members[]" value="<?php echo $row["AccountID"]; ?>" ></td>
<td><?php echo $row["AccountID"]; ?></td>
<td><?php echo $row["Username"]; ?></td>
<td><?php echo $row["Password"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Function"]; ?></td>
<td><?php echo $row["resetpw_token"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="head">
<td colspan="4"><input id="update" type="button" name="Edit" value="Edit" onClick="setUpdateAction();" /> 
				<input id="del" type="button" name="delete" value="Delete"  onClick="setDeleteAction();" />
</td>
</tr>
</table>
</form>
</div></center>
</body>