<html>
<head>
	<meta http-equiv="refresh" content="10">
	<title>CDI chat</title>
</head>
<body>
			<?php
				include("connect.php");

				session_start();

				$show = $db->query("SELECT userstb.fname,chattb.chatbody,chattb.chatdate,userstb.username FROM userstb INNER JOIN chattb ON userstb.userID = chattb.userID ORDER BY chattb.chatid DESC LIMIT 50");

				$cur_bg = "skyblue";
				$cur_txt = "white";

				while($row = $show -> fetch_array())
				{

					$cur_user = $row[3];
					

					//$getclr = $db->query("SELECT colortb.colorbg,colortb.colortxt FROM colortb INNER JOIN userstb ON colortb.username = colortb.username WHERE userstb.username = '$cur_user' ORDER BY colortb.colorid DESC");
					$getclr = $db->query("SELECT colortb.colorbg,colortb.colortxt FROM colortb WHERE colortb.username = '$cur_user' ");

					while($val = $getclr -> fetch_array())
					{
						$cur_bg = $val[0];
						$cur_txt = $val[1];
					}

					if($row[0] == $_SESSION['fname'])
					{
						echo "
						<br/>
						<table style='margin-top:-20px; width:80%;' align='right'>
							<tr>
								<td width='10%' style='text-align:left; font-size:9px;'>".$row[2]."</td>
								<td width='35%'><div class='item-x' style='font-family:Comic Sans MS; color:".$cur_txt."; background: ".$cur_bg."'><p>".$row[1]."</p></div></td>
								<td class='names' width='15%' style='text-align:left; font-family:Comic Sans MS; color:".$cur_txt."; '>".$row[0]."</td>
							</tr>
						</table>
						";
					}
					
					else
					{

					echo "
						
						<table style='margin-top:-20px; width:80%;' align='left'>
							<tr>
								<td class='names' width='15%' style='text-align:right; font-family:Comic Sans MS; color:".$cur_txt."; '>".$row[0].":</td>
								<td width='35%'><div class='item' style='font-family:Comic Sans MS; color:".$cur_txt."; background: ".$cur_bg."'>&nbsp;".$row[1]."</div></td>
								<td width='10%' style='text-align:right; font-size:9px;'>".$row[2]."</td>
							</tr>
						</table>
						";

					}

				}
			?>
		<link href="styles3.css" type="text/css" rel="stylesheet">
</body>
</html>