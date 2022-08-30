<!DOCTYPE html>
<html>
<head>
	<title>Login Perpustakaan Umum</title>
</head>
<body>
	<h2>Silahkan Login</h2>
	<hr>
	<form method="post" action="../process/login_check.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="masukkan username" value="Rifki"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="masukkan password" value="Rifki123"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>