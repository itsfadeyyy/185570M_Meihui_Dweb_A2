<?php

session_start();

include "db_connect.php";
$stmt = $mysqli -> prepare("SELECT * FROM tb_posts");

$stmt -> execute();

$stmt -> bind_result($id_post,$sPosts,$iUserid);

while($stmt -> fetch())
{
	echo "<p>$sPosts</p>";
	
	if(isset($_SESSION["id"])&&($_SESSION["id"]==$iUserid)){
		echo "<a href='deletepost.php?id_post=$id_post'>Delete</a><br>";
		echo "<a href='editpost.php?id_post=$id_post'>Edit</a>";
	}
	
	echo "<hr>";
}
$stmt -> close();
$mysqli -> close();

?>

<a href="addpost.php">Add post</a>