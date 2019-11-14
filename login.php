<?php
include "conn.php";
global $conn; 
 ?>

 <?php 
	if (isset($_POST['masuk'])) {
		 $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
         $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         //print_r($username);


		$query = "SELECT * FROM tb_user WHERE username='".$username."'AND password='".$password."'";
		$cek = mysqli_query($conn,$query);
		while ($data = mysqli_fetch_array($cek)) {
			$pass = $data['password'];
			print_r($data['username']);
			header('location: courses.php');
		}
		if ($cek) {
		}
           
		// else {
		// 	echo "gagal";
		// 	var_dump($cek);	
	}		
	
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webpem-Login</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --> 
	<style>
	body{
		background: url(img/codi.jpg) no-repeat;
		background-size: cover;
	}
	body{
	margin: 0;
	padding: 0;
	background: white;
}
.signup-form{
	width: 300px;
	padding: 20px;
	text-align: center;
	background: url(shield.jpg);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	overflow: hidden;
}
.signup-form h1{
	margin-top: 50px;
	font-family: 'permanent Marker',cursive;
	color: #fff;
	font-size: 40px;
}
.signup-form input{
	display: block;
	width: 100%;
	padding: 0 16px;
	height: 44px;
	/*text-align: center;*/
	box-sizing: border-box;
	outline: none;
	border: none;
	font-family: "montserrat",sans-serif;
}
.txtb{
	margin: 20px;
	background: rgba(255,255,255,.5);
	border-radius: 6px;
}
.signup-btn{
	margin-top: 60px;
	margin-bottom: 20px;
	background: #487eb0;
	color: #fff;
	border-radius: 44px;
	cursor: pointer;
	transition: 0.8s;
}
.signup-btn:hover{
	transform: scale(0.96);
}
.signup-form a{
	text-decoration: none;
	color: #fff;
	font-family: "montserrat",sans-serif;
	font-size: 14px;
	padding: 10px;
	transition: 0.8s;
	display: block;
}
.signup-form a:hover{
	background: rgba(0,0,0.3);
}




</style>
</head>
<body>

	<div class="signup-form">
		<form class="" action="login.php" method="post">
			<h1>LOG IN</h1>
			<br>
			<div class="txtb">
			<input type="text" placeholder="Username" name="username" autocomplete="off" required="">
			
			<input type="password" placeholder="Password" name="password" required="">
		    </div>
			<input type="submit" value="Masuk" name="masuk" class="signup-btn">
			<a href="signup.php">Daftar di sini</a>
			
		</form>		
	</div>

</body>
</html>