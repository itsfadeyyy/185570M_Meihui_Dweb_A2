<?php
	
	$sUsername = $_POST["sUsername"];
	$sPassword = $_POST["sPassword"];
	include "db_connect.php";
	$stmt = $mysqli -> prepare("SELECT id FROM tb_users WHERE sUsername = ? AND sPassword = ?");
	
	$stmt->bind_param("ss",$sUsername,$sPassword);
	$stmt->execute();
	
	$stmt->store_result();
	$row = $stmt->num_rows();
	$stmt->bind_result($id);
	$stmt->fetch();
	
	$stmt->close();
	$mysqli->close();
	
	if($row == 0)
	{
		echo "Login failed.<br/>";
	?>
	
	<a href="regislogin.html">Login</a>
	
	<?php
	
	}
	else
	{
		session_start();
		$_SESSION["id"] = $id;
		echo "Login success.<br/>";
	
	?>
	
	<a href="forumin.php">Read posts</a>
	
	<?php
	}
	?>
