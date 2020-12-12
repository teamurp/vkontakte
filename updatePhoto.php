<?php 
	session_start();
	$uploadfile = 'img/' . basename($_FILES['photo']['name']);
	move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk40');
	mysqli_query($con, "UPDATE users SET avatar='{$uploadfile}' WHERE id={$_SESSION['id']}");
	header("Location: account.php");
 ?>