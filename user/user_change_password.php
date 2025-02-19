<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $uname = $_SESSION['username'];
        $pass = $_SESSION['pass'];

        $pass2 = $_POST['oldpassword'];
        $pass3 = $_POST['newpassword'];
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
            
        if($pass2 == $pass)
        {
            $query = "update user_data set Pass='$pass3' where Username='$uname';";

            $up = $con->query($query);

            if($up)
            {
                $msg = "update sucessfully";
            }
            else
            {
                $msg = "Old pasword does not match please check and try again";
            }
			
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .main{
            display: flex;
            flex-direction: column;
        }
        
        /* horizontal navigation */
        .nav{
            height: 60px;
            width: 100%;
            left: 0;    
            position: absolute;
            /* left: 200px; */
            top: 0px;
            border: 1px solid red;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: row;
            align-items: center;
            
            /* justify-content: center; */

            /* margin-left: 250px; */
        }
        .nav h3{
            width: 300px;
           
            color:white;
            
            font-size: 2em;
        }
        .name{
            /* border: 4px solid red; */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
        }
        .link{
            width:80%;
            display: flex;
            justify-content: end;
            /* border: 1px solid blue; */
        }
        .link a{
            font-size: 25px;
        }
       
        ul{
            list-style: none;
        }
        
        h4{
            border: 1px solid;
            padding: 0;
            margin: 0px;
            margin-left: 0px;
        }
        li{
            margin-bottom: 20px;
        }
        li h4{
            margin-left: -40px;
            color: white;
            font-size: 25px;
           
        }
        li a{
            font-size: 25px;
        }
        
        a{
            text-decoration: none;
        }
        /* vertical navigation */
        .nav a , .nav2 a{
            color: white;
        }
        .nav2{
            width: 20%;
            top: 40px;
            height: 1000px;
            /* position: absolute; */
            margin-left: 0px;
            border:1px solid red;
            display: flex;
            justify-content:start;
            
            background-color: rgba(0, 0, 0, 0.8);
            
        }
        /* content */
       .content{
            border: 1px solid red;
            width:90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        .part2{
            width: 100%;
            height: 1000px;
            border: 2px solid yellow;
            margin-top: 55px;
            display: flex;
            flex-direction: row;
            margin-left: -10px;
        }
        
        .btn{
            margin-top: 20px;
            width: 100px;
            margin-left: 20px;
            border-radius: 20px;
            height: 30px;
        }
        
    </style>
</head>
<body>
    <din class="main">
        <div class="nav">
            <div class="name">
                <h3>User | Page</h3>
            </div>
            <div class="link">
                <a href="../user/home.php">Logout</a>
            </div>
        </div>
    </din>
    <div class="part2">    
        <div class="nav2">
        <ul>
            <li>
                <li><h4>Settings</h4></li>
                <li><a href="../user/user_change_password.php">Change password</a></li>
                <li><h4>Content</h4></li>
                <li><a href="../user/user_home.php">DashBoard</a></li>
                <li><h4>interfaces</h4></li>
                <li><a href="../user/learning_licence_form.php">Learning Licence Request</a></li>
                <li><a href="../user/driving_licence_form.php">Driving Licence Request</a></li>
            </li>
        </ul>
        </div>
        <div class="content">
            <div class="hed">
                <h1>Change Password</h1>
            </div>
            <div class="c1">
            <form action="" method="post">
                <p>Old Password:</p>
                <input type="text" name="oldpassword"class="itext" placeholder="Enter old Password"><br>
                <p>New Password:</p>
                <input type="text" name="newpassword"class="itext" placeholder="Enter new Password"><br>
                <p>Confirm Password:</p>
                <input type="text" name="confirmpassword"class="itext" placeholder="Enter confirm Password"><br>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
            <p><?php if(isset($_POST['submit'])){ echo $msg ;}?></p>
           </div>
        </div>
    </div>
</body>
</html>