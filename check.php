<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk40');
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone = '{$_GET["phone"]}' and password = '{$_GET["password"]}'");
	$stroka = $query->fetch_assoc();
	if($stroka!=null){
		header("Location: account.php");
		$_SESSION['id'] = $stroka['id'];
	}
	else {
		header("Location: index.php?error=Нет такого пользователя!");
	}
 ?>