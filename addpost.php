<?php 
	session_start();
	$uploadfile = 'img/' . basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk40');
	mysqli_query($con, "INSERT INTO posts (text, img, user_id) VALUES ('{$_POST["text"]}', '{$uploadfile}', {$_SESSION["id"]})");
	header("Location: account.php");
 ?>