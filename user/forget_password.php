<?php
// session_start();
//     if(isset($_POST['submit']))
//     {
//         $uname = $_SESSION['username'];
//         $pass = $_SESSION['pass'];

//         $pass2 = $_POST['oldpassword'];
//         $pass3 = $_POST['newpassword'];
//         $servername = "localhost";
// 			$username = "root";
// 			$password = "";
// 			$database = "rto";

// 			$con = new mysqli($servername,$username,$password,$database);
// 			if($con)
// 			{
// 				echo "connected";
// 			}
// 			else
// 			{
// 				echo "not connected";
// 			}
		
// 	}
   ?>         
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
	body {
		margin: 0;
	}
	
	/* navigation bar */
	.nav {
		display: flex;
		flex-direction: row;
		background-color: rgba(0, 0, 0);
		opacity: 0.8;
		width: 100%;
		position: fixed;
	}
	
	h3 {
		color: white;
		margin-left: 20px;
	}
	
	.links {
		display: flex;
		justify-content: end;
		width: 900px;
		/* border: 1px solid; */
	}
	
	ul {
		display: flex;
		flex-direction: row;
	}
	
	li {
		list-style: none;
	}
	
	.links a {
		text-decoration: none;
		margin-right: 20px;
		color: white;
		position: relative;
	}
	
	a:hover {
		font-weight: bold;
	}
	
	a:hover:after {
		width: 100%;
	}
	
	a::after {
		content: "";
		position: absolute;
		top: 20px;
		left: 0px;
		height: 2px;
		width: 0;
		background-color: rgb(233, 10, 207);;
		transition: all 0.9s;
	}
	
	body {
		background: url(../image/truck3.jpg) no-repeat center center/cover;
		/* display: flex; */
		height: 800px;
		/* align-items: center;
			justify-content: center; */
	}
	
	.mmain {
		display: flex;
		align-items: center;
		justify-content: center;
		height: 800px;
		width: 100%;
		background: url("../image/truck2.jpg") no-repeat center center/cover;
	}
	
	.main {
		display: flex;
		align-items: center;
		flex-direction: column;
		height: 550px;
		width: 400px;
		border: 1px solid;
		background-color: rgba(0, 0, 0, 0.9);
		color: dodgerblue;
	}
	
	p {
		display: inline;
		font-size: 20px;
		color: white;
	}
	
	.itext {
		margin-bottom: 30px;
		margin-left: 20px;
		font-size: 15px;
		background: none;
		border-top: none;
		border-left: none;
		border-right: none;
		width: 200px;
		color: rgb(241, 8, 175);;
	}
	
	.iradio {
		margin-left: 20px;
		margin-bottom: 30px;
	}
	
	.btn {
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
	.b3 {
		padding: 10px 70px;
		border-radius: 20px;
		background-color: dodgerblue;
		border: none;
		margin-top: 10px;
	}
	
	a {
		text-decoration: none;
		color: white;
		display: flex;
		justify-content: center;
		/* margin-top: 10px; */
	}
	
	.b1 {
		background: white;
		border: 2px solid white;
		/* border-bottom: none; */
	}
	
	.b2 {
		background: None;
		border: 2px solid white;
		border-bottom: none;
	}
	
	.link {
		width: 100%;
		display: flex;
		justify-content: end;
	}
	
	.b1 {
		margin-right: 0px;
	}
	</style>
	</head>
	<body>
		<div class="nav">
			<h3>RTO Management</h3>
			<div class="links">
				<ul>
					<li><a href="../user/home.php">Home</a></li>
					<li><a href="../user/about.php">About us</a></li>
					<!-- <li><a href="contact.jsp">Contact Us</a></li> -->
					<li><a href="../user/login.php">Login</a></li>
				</ul>
			</div>
			
	 </div>
	 <div class="mmain">
		<div class="main">
		<h2>Sign in</h2>
			<form class="form" action="forget_password_backend">
				<div class="usr">
			
			<P>UserName:</P>
			<input type="text" name="username"class="itext" placeholder="Enter UserName"><br>
			<P>Email Id:</P>
			<input type="email" name="email"class="itext" placeholder="Enter Email Id"><br>
			<P>Phone No:</P>
			<input type="number" name="phone"class="itext" placeholder="Enter Phone Number"><br>
			<p>New Password:</p>
			<input type="text" name="password1"class="itext" placeholder="Enter new Password"><br>
			<p>Confirm Password:</p>
			<input type="text" name="password2"class="itext" placeholder="Enter confirm Password"><br>
			
			</div>
			<div class="btn">
				<button type="submit" class="b3">Sign in</button>
			</div>
			<!-- <a href="./signin.html">Not yet sign in</a> -->
			</form>
		</div>
	</div>
	</body>
</html>