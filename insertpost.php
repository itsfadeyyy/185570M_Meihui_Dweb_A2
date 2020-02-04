<?php

session_start();
$sPost = $_POST["sPost"];
$iUserid = $_POST["iUserid"];
include_once "db_connect.php";
$stmt = $mysqli->prepare("INSERT INTO tb_posts(sPost,iUserid) VALUES(?,?)");
$stmt->bind_param("si",$sPost,$iUserid);
$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: forumin.php");

?>