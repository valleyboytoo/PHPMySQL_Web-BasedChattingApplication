<?php
	session_start();
	if($_SESSION['fname'] == "")
	{
		header("Location: index.php");
	}

?>

<html>
<head>
	<title>CDI chat</title>
	<script src="chat.js"></script>
</head>

<?php
	$_SESSION["login-failed"] = 0;
?>
<link href="styles.css" type="text/css" rel="stylesheet">
<body>
<center>
	<div id="main">
		<h1>CDI chat</h1>
		<table width="100%" style="background:">
			<tr>
				<td >
					<h3 style="color:yellow; font-family:Comic Sans Ms">&nbsp;Welcome <?php echo $_SESSION["fname"]; ?> </h3>
				</td>
				<td align="right">
					<a href="logout.php"><div id="lo-but"><p style="font-family:Comic Sans Ms; font-size:18px;">log-out</p></div></a>
				</td>
			</tr>
		</table>

		<iframe id="chatbox" src="home-auto.php"></iframe>
		
		<br/>
		<form action="send.php" method="POST">
		<table width="80%" align="center">
			<tr>
				<td align="right"><textarea id="txtarea" name="txtarea" required></textarea></td><td width="auto"><input type="submit" value=">>" id="send"></div></td>
			</tr>
		</table>
		</form>
	</div>
</center>
</body>

</html>