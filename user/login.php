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
        background: url(../image/truck3.jpg) no-repeat center center/cover;
        display: flex;
        height: 800px;
        /* align-items: center;
            justify-content: center; */
    }
    
    h3 {
        color: white;
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
    
    .heffect a:hover {
        font-weight: bold;
    }
    
    .heffect a:hover:after {
        width: 100%;
    }
    
    .heffect a::after {
        content: "";
        position: absolute;
        top: 20px;
        left: 0px;
        height: 2px;
        width: 0;
        background-color: rgb(233, 10, 207);;
        transition: all 0.9s;
    }
    
    .mmain {
        display: flex;
        height: 800px;
        width: 100%;
        
        align-items: center;
        justify-content: center;
        background: url("../image/truck2.jpg") no-repeat center center/cover;
    }
    
    .main {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: 350px;
        width: 400px;
        
        background-color: rgba(0, 0, 0, 0.9);
        color: rgb(241, 8, 175);
        color: dodgerblue;
    }
    
    p {
        display: inline;
        font-size: 20px;
        color: white;
    }
    
    input {
        margin-bottom: 30px;
        margin-left: 20px;
        font-size: 15px;
        background: none;
        border-top: none;
        border-left: none;
        border-right: none;
        width: 200px;
        color: rgb(241, 8, 175);
        color: dodgerblue;
    }
    
    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .b3 {
        padding: 10px 70px;
        border-radius: 20px;
        background-color: rgb(241, 8, 175);
        background-color: dodgerblue; border : none;
        margin-top: 10px;
        margin-bottom: 10px;
        border: none
    }
    
    a {
        text-decoration: none;
        color: rgb(241, 8, 175);
        display: flex;
        justify-content: center;
        /* margin-top: 10px; */
    }
    
    .b1 {
        background: none;
        
        border-bottom: none;
    }
    
    .b2 {
        border-bottom: none;
        background: dodgerblue;
        border: 2px solid dodgerblue;
    }
    
    .link {
        width: 100%;
        display: flex;
        justify-content: end;
    }
    
    .mmain a {
        color: white;
    }
    
    .b1 {
        margin-right: 0px;
    }
    
    button:hover {
        cursor: pointer;
    }
    
    .forget {
        margin-top: 10px;
    }
    
    .submenu {
        color: red;
        display: none;
        background-color: azure;
        
    }
    
    .submenu ul {
        display: flex;
        flex-direction: column;
    }
    
    .submenu a {
        /* padding-bottom: 10px; */
        padding-top: 10px;
    }
    
    .links ul li:hover .submenu {
        display: inline;
        position: relative;
        left: -20px;
    }
    
    .submenu a:hover:after {
        width: 0;
    }
    </style>
    </head>

    <?php

    session_start();
    
        if(isset($_POST['submit']))
        {

            $uname = $_POST['username'];
            $pass = $_POST['password'];

            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "rto";

			$con = new mysqli($servername,$username,$password,$database);
			// if($con)
			// {
			// 	echo "connected";
			// }
			// else
			// {
			// 	echo "not connected";
			// }

			$query = "select * from user_data;";

			$select = $con->query($query);

			while($row = mysqli_fetch_assoc($select))
			{
                $u2 = $row['Username'];
                $p2 = $row['Pass'];
                $name=$row['First_Name'];
                if($uname==$u2 && $pass==$p2)
                {
                    $_SESSION['username'] = $uname;
					$_SESSION['name'] = $name;
                    $_SESSION['pass'] = $pass; 
                    header("location: user_home.php");

                }

            }
        }
    
    ?>
    
    <body>
        <div class="nav">
            <h3>RTO Management</h3>
            <div class="links">
                <ul class="heffect">
                    <li><a href="../user/home.php">Home</a></li>
                    <li><a href="../user/about.php">About us</a></li>
                    
                    <li><a href="../user/login.php">Login</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="../user/login.php">User</a></li>
                                <li><a href="../admin/admin_login.php">Admin</a></li>
                            </ul>
                        </div></li>
                </ul>
            </div>
    
        </div>
        <div class="mmain">
            <div class="main">
                <div class="link">
                    <button class="b1">
                        <a href="../user/login.php">Login</a>
                    </button>
                    <button class="b2">
                        <a href="../user/signin.php">Signin</a>
                    </button>
                </div>
                <h2>Login</h2>
                <form class="form" action="" method="post">
                    <div class="usr">
                        <P>UserName:</P>
                        <input type="text" name="username"><br>
                        <p>Password:</p>
                        <input type="text" name="password"><br>
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" class="b3">Log in</button>
                    </div>
                    <a href="../user/signin.php">Not yet sign in</a> <a
                        href="../user/forget_password.php" class="forget">Forget password</a>
                </form>
            </div>
        </div>
    </body>
</html>