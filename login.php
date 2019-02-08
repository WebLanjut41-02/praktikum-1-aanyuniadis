<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<h1><?php echo $juduls ?></h1>
	<center>
	<h1>LOGIN</h1>
	<form action="<?php echo base_url();?>control/tampil" method="post">		
		<table border="1">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</center>
</section>
</body>
</html>
