<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<form method="POST" action="">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="u_name">
		</tr>
<tr>
	<td>Password:</td>
	<td><input type="Password" name="u_pass"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="u_login"></td>
</tr>
	</table>
</form>
<?php
if (isset($_POST['u_login'])) {
$u_name = $_POST['u_name'];
$u_pass = md5($_POST['u_pass']);

echo "$u_name";
echo '<br/>';
echo "$u_pass";
}
?>
</body>
</html>