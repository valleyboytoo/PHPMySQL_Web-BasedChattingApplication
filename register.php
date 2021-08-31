<html>
<head>
	<title>CDI chat</title>
</head>


<body>
<center>
	<div id="main">
		<h1>CDI chat</h1>
		<h4>REGISTER</h4>

		<?php
		session_start();

		$_SESSION["login-success"] = 0;
		
		if($_SESSION["reg-failed"] == 1)
			{
				print("*registration failed");
			}

		if($_SESSION["fname"] == "")
		{
			//header("Location: login.php");
		}
		else
		{
			header("Location: home.php");
		}
		?>

		<form action="confirm-reg.php" method="POST">
			<table>
			<tr>
				<td class="align-right">username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td class="align-right">password</td><td>:</td><td><input  id="p1" class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td class="align-right">confirm.password</td><td>:</td><td><input  id="p2" class="txt" type="password" required name="cpassword" /></td>
			</tr>
			<tr>
				<td class="align-right">last.name</td><td>:</td><td><input class="txt" type="text" required name="lname" /></td>
			</tr>
			<tr>
				<td class="align-right">first.name</td><td>:</td><td><input class="txt" type="text" required name="fname" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="index.php"><input id="login" type="button" value="log-in"/></a>
					<input id="reg" type="submit" value="register" onclick="return check()" />
				</td>
			</tr>
			</table>
		</form>
	</div>
</center>
<link href="styles2.css" type="text/css" rel="stylesheet">
<script src="chat.js"></script>
</body>

</html>