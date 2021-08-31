<?php
	session_start();
	if($_SESSION["fname"] == "")
	{
		//header("Location: index.php");
	}
	else
	{
		header("Location: home.php");
	}
?>

<html>
<head>
	<title>CDI chat</title>
	<script src="chat.js"></script>
</head>

<body>
<center>
	<div id="main">
		<h1>CDI chat</h1>
		<h4>
			<?php
				if($_SESSION['reg-success'] == "yes" && $_SESSION['login-failed'] == "clear" )
				{
					echo("registration successful");
				}
				if($_SESSION['login-failed'] == "yes" && $_SESSION['reg-success'] = "clear")
				{
					echo("login failed. Username or password not correct");
				}
			?>
		</h4>
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td>password</td><td>:</td><td><input class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="register.php"><input id="reg" type="button" value="register" /></a>
					<input id="login" type="submit" value="log-in" />
				</td> 
			</tr>
		</form>
	</div>
</center>
<link href="styles4.css" type="text/css" rel="stylesheet">
</body>

</html>