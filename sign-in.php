<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" href="https://cdn-images-1.medium.com/max/1600/1*uqU3OlFq8Z7GbCflFm1HpQ.gif">
	<style>
    body{
	margin: 0;
	padding: 0;
	background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url("http://www.jacaranda.com.au/wp-content/uploads/2016/12/studyon_header_20161.jpg");
	background-size: cover;
	font-family: sans-serif;
  background-attachment:fixed;
}

.box{
	width: 328px;
	height: 420px;
	background: rgba(0, 0, 0, 0.34);
	color: white;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 20px;
	padding:80px 30px;

	
}
.logo{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 35%;
}
h1{
	margin: 0;
	padding:0 0 20px;
	text-align: center;
	font-size: 22px;
}
.box p{
	margin: 0;
	padding:0;
	font-weight: bold;
}
.box input{
	width: 100%;
	margin-bottom: 20px;
	
}
.box input[type="text"],input[type="password"]{
	border:none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
}
.box input[type="submit"]
{
	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}
.box input[type=submit]:hover{
	cursor: pointer;
	background:green;
	color: white;
	
}
.box a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}
.box a:hover{
	color:yellow; 
}
</style>
</head>
<body>
	<div class="box">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYcv-0ewt7HOXii0rH2Z7Ct6dBzLiL6q7ErolktZQmTVFB77W3" class="logo" >
		<h1>Login Here</h1>
		<form>
			<p>Username</p>
			<input type="text" name="" value="" placeholder="Enter the Username">
			<p>Password</p>
			<input type="password" name="" value="" placeholder="Enter your password">
			<input type="submit" name="" value="Login">
			<a href="#">Forget Password</a><br>
			<a href="/continue.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>">Don't have Account</a>
		</form>
	</div>
</body>
</html>