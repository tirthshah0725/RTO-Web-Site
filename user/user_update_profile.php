<?php
             session_start();
             $uname = $_SESSION['username'];
             $sname = $_SESSION['name']; 
?>

<?php

    if(isset($_POST["submit"]))
    {
        $fname2 = $_POST['fname'];
        $lname2 = $_POST['lname'];
        $email2 = $_POST['gmail'];
        $phone2 = $_POST['phone'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "rto";

        $con = new mysqli($servername,$username,$password,$database);
        // if($con)
        // {
        //     echo "connected";
        // }
        // else
        // {
        //     echo "not connected";
        // }
        $query = "update user_data set First_Name = '$fname2',Last_Name = '$lname2',Email = '$email2',Phone_no = '$phone2' where Username='$uname'";

        $up = $con -> query($query);
        if($up)
        {
            header("location: user_home.php");
        }
        else
        {
            echo "not update";
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
        .main h4{
        margin-right:20px;
        padding:0;
        border:none;
        font-size:25px;
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
            
            background-color: darkgrey;
            /* display: flex;
            flex-direction: column;
            align-items: center; */
            
        }
        .hed{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .content p{
            display: inline;
            font-size: 25px;
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
        textarea{
            font-size: 20px;
        }
        select{
            height: 30px;
            width: 200px;
            border-radius: 10px;
            font-size: 20px;

        }
        input{
            height: 30px;
            border-radius: 5px;
            width: 300px;
            margin-left: 10px;
            font-size: 20px;
        }
     	 .r1 , .r2 , .r3 , .r4 , .r5{
            display: flex;
            flex-direction: row;
            
            margin-top: 40px;
        }
        .r11 , .r22 , .r21 , .r22{
            margin-right: 10%;
            margin-left: 20px;
        }
        .r31 , .r32 , .r41 , .r51 , .r52 {
            margin-right: 10%;
            margin-left: 20px;
        } 
        
        
        
       .r6{
        width: 90%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 40px;
       }
    .r6 button{
        height: 50px;
        width: 200px;
        font-size: 20px;
        border-radius: 20px;
        background-color:thistle
    }
    .sname{
        margin-right:40px;
        color:white;
        font-size:20px;
        border:none;
        margin-top:5px;
    }
        
    </style>
</head>

<body>

    <div class="main">
        <div class="nav">
            <div class="name">
                <h3>User| Page</h3>
            </div>
            <div class="link">
            <h4 class="sname">Hey <?php echo $sname;?></h4>
                <a href="../user/home.php">Logout</a>
            </div>
        </div>
       
    </div>
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
                <h1>Update Profile</h1>
            </div>
            <div class="c1">
            
    <?php
           

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

			$query = "select * from user_data where Username = '$uname';";

			$select = $con->query($query);

			while($row = mysqli_fetch_assoc($select))
			{
                $fname = $row['First_Name'];
                $lname = $row['Last_Name'];
                $email = $row['Email'];
                $phone= $row['Phone_no'];
            }
            
            ?>
        	<form action="" method="post">
        	


                <div class="r1">
                    <div class="r11">
                        <p>First Name: </p>
                        <input type="text" name="fname" value="<?php echo $fname;?>">
                    </div>
                    <div class="r21">
                        <p>Last Name: </p>
                        <input type="text" name="lname" value="<?php echo $lname;?>">
                    </div>
                </div>
                
                <div class="r3">
                <div class="r32">
                        <p>Gmail Id: </p>
                        <input type="email" name="gmail" value="<?php echo $email;?>">
                    </div>
                    <div class="r31">
                        <p>Phone No: </p>
                        <input type="number" name="phone" value="<?php echo $phone;?>">
                    </div>
                    
                </div>
                
                <div class="r6">
                    <button type="submit" name="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </di
</body>
</html>