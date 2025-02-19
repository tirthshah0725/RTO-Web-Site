<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

	<?php
	session_start();
		if(isset($_POST['submit']))
		{
			$u1 = $_POST['username'];
			$p1 = $_POST['password'];

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "rto";

			$con = new mysqli($servername,$username,$password,$database);
			if($con)
			{
				echo "connected";
			}
			else
			{
				echo "not connected";
			}

			$query = "select * from admin_data;";

			$select = $con->query($query);

			while($row = mysqli_fetch_assoc($select))
			{
				// echo "<h1>". $row['Username']."</h1>";
				// echo $row['Pass'];

				$u2 = $row['UserName'];
				$p2 = $row['Pass'];
				$srno = $row['sr_no'];
				$name = $row['First_Name'];
				

				if($u1 == $u2 && $p1 == $p2)
				{
					$_SESSION['id'] = $srno;
					$_SESSION['name'] = $name; 
					header("location: admin_home.php");
				}
			}
			

			// $_SESSION['username'] = $u2;
			// $_SESSION['password'] = $p2;

			// header("location: demo.php");
			// if($select)
			// {
			// 		header("location: admin_city.php");
			// }
		}
	
	?>
	body{
		margin: 0;
		background: url(../image/truck3.jpg) no-repeat center center/cover;
		display: flex;
		height: 800px;
		/* align-items: center;
		justify-content: center; */
		
	}
	h3{
		color: white;
	}
	
	/* navigation bar */
	.nav{
            display: flex;
            flex-direction: row;
            background-color: rgba(0,0,0);
            opacity: 0.8;
            width: 100%;
            position: fixed;
        }
        .links{
            display: flex;
            justify-content: end;
            width: 900px;
            /* border: 1px solid; */
        }
        ul{
            display: flex;
            flex-direction: row;
        }
        li {
            list-style: none;

        }
        .links a{
            text-decoration: none;
            margin-right: 20px;
            color: white;
            position: relative;
            
        }
        .heffect a:hover{
            font-weight: bold;
        }
        .heffect a:hover:after{
            width: 100%;
        }
        .heffect a::after{
            content: "";
            position: absolute;
            top: 20px;
            left: 0px;
            height: 2px;
            width: 0;
            background-color: rgb(233, 10, 207);;
            
            transition: all 0.9s;
            
        }
		.mmain{
		display: flex;
		height: 800px;
		width:100%;
		border: 1px solid red;
		align-items: center;
		justify-content: center;
		background: url("../image/truck2.jpg") no-repeat center center/cover;
	}
	.main{
		display: flex;
		align-items: center;
		
		flex-direction: column;
		height: 350px;
		width: 400px;
		border: 1px solid;
		background-color:rgba(0,0, 0, 0.9);
		color:rgb(241, 8, 175); 
		}
p{
display:inline;
font-size: 20px;
color: purple;
}
input{
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
.btn{
	display: flex;
	align-items: center;
	justify-content: center;
	
	
}
.b3{
	padding: 10px 70px;
	border-radius: 20px;
	background-color: rgb(241, 8, 175);
	border: none;
	margin-top: 10px;
}
a{
	text-decoration: none;
	color: rgb(241, 8, 175);
	display: flex;
	justify-content: center;
	/* margin-top: 10px; */
}
.b1{
	background: none;
	border: 2px solid white ;
	border-bottom: none;

}
.b2{
	border-bottom: none;
	background: white;
	border: 2px solid white ;
}
.link{
	width: 100%;
	display: flex;
	justify-content: end;
	
}
.b1{

	margin-right: 0px;
}
button:hover{
	cursor:pointer;
}

</style>
</head>
<body>
	<div class="nav">
        <h3>RTO Management</h3>
        <div class="links">
            <ul class="heffect">
                <li><a href="../user/home.php">Home</a></li>
                <li><a href="../user/about.php">About us</a></li>
               
                
            </ul>
        </div>
        
 </div>
 <div class="mmain">
	<div class="main">
		
		<h2>Admin Login</h2>
		<form class="form" action="" method="post">
			<div class="usr">
		<P>UserName:</P>
		<input type="text" name="username"><br>
		<p>Password: </p>
		<input type="text" name="password"><br>
	</div>
		<div class="btn">
			<button type="submit" name="submit" class="b3">Log in</button>
		</div>
		 
		</form>
	</div>
</div>
</body>
</html>