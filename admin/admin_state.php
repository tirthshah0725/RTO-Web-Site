<?php
if(isset($_POST['submit']))
{


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


$name = $_POST['confirmstate'];

$query = "insert into state values('','$name');";
$insert = $con->query($query);
if($insert)
{
    header("location: admin_home.php");
}
else
{
    echo "error".$con->error;
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
        /* border: 3px solid blue; */
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
        border: 3px solid red;
        width:80%;
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
<div class="main">
    <div class="nav">
        <div class="name">
            <h3>User| Page</h3>
        </div>
        <div class="link">
            <a href="../user/home.php">Logout</a>
        </div>
    </div>
   <div class="part2">    
        <div class="nav2">
            <ul>
                <li>
                    <li><h4>Settings</h4></li>
                    <li><a href="../admin/admin_change_password.php">change password</a></li>
                    <li><h4>Content</h4></li>
                    <li><a href="../admin/admin_home.php">DashBoard</a></li>
                    <li><h4>interfaces</h4></li>
                    <li><a href="../admin/admin_city.php">Add cities</a></li>
                    <li><a href="../admin/admin_state.php">Add states</a></li>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="hed">
                <h2>Add State</h2>
            </div>
            <div class="c1">
                <form action="" method="post">
                <p>State Name:</p>
                <input type="text" name="newstate"class="itext" placeholder="Enter new State Name"><br>
                <p>Confirm State Name:</p>
                <input type="text" name="confirmstate"class="itext" placeholder="Enter confirm State Name"><br>
                <button type="submit" name="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
   </div> 
</div>
</body>
</html>