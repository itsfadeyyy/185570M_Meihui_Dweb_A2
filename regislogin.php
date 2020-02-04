	<?php
	
	$sEmail = $_POST["sEmail"];
	$sPassword = $_POST["sPassword"];
	$sUsername = $_POST["sUsername"];
	
	echo "Inserting sEmail: $sEmail,sPassword: $sPassword,sUsername:$sUsername<br/>";
	
	include "db_connect.php";
	$stmt=$mysqli->prepare("INSERT INTO tb_users (sEmail,sPassword,sUsername)VALUES(?,?,?)");
	
	$stmt-> bind_param("sss",$sEmail,$sPassword,$sUsername);
	
	$stmt-> execute();
	$stmt-> close();
	
	$mysqli-> close();
	
	echo "Registration success!<br/>";
	
	?>
	