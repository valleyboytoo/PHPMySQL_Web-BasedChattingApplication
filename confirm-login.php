<?php
include("connect.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$sql = $db->query("SELECT username,password,userID,fname FROM usersTB WHERE username = '$username' AND password = '$password' ");

while($row = $sql -> fetch_array())
{
	if(($row[0] == $username) AND $row[1] == $password)
	{
		session_start();
		$_SESSION["fname"] = $row[3];
		$_SESSION["userid"] = $row[2];
		$_SESSION["uname"] = $row[0];
		header("Location: home.php");
	}	
}
		//if nothing found
	session_start();
	$_SESSION["login-failed"] = "yes";
	$_SESSION['reg-success'] = "clear";
	header("Location: login.php");
		
?>
<link href="styles1.css" type="text/css" rel="stylesheet">
<html>
<head>
<title>eLearning Messaging App - 2016</title>
</head>


<body>
<center>
	<div id="main">
		<h1>CDI chat</h1>
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td>password</td><td>:</td><td><input class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center"><a href="register.php"><input id="reg" type="button" value="register" /></a><input id="login" type="submit" value="log-in" /></td>
			</tr>
		</form>
	</div>
	
</center>
<p>*username or password not correct</p>
</body>

</html>