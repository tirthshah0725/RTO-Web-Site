<?php

session_start();

$uname = $_SESSION['username'];
$sname = $_SESSION['name'];
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
        
        background-color: darkgrey;
        /* display: flex;
        flex-direction: column;
        align-items: center; */
        background: url("../image/keybord2.jpg") no-repeat center center/cover;
        color: lightcyan;
        
    }
    .hed{
        width: 100%;
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
    .details{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    table td{
        border: 1px solid;
    }
    td{
        width: 300px;
        height: 50px;
        font-size: 20px ;
        font-weight: bold;
    }
    .d1 , .d2 , .d3 , .d4 , .d5 , .d6 , .d7 , .d8{
        display: flex;
        flex-direction: row;
        border: 1px solid;
        margin-left: 40px;
       
     
    }
    .d11 ,  .d21 , .d31 , .d41 , .d51 , .d61 , .d71 , .d81{
        display: flex;
        flex-direction: row;
        /* border: 1px solid red; */
        font-size: 30px;
        width: 40%;
        /* margin-left: 60px; */
        justify-content: space-between;
        
        
    }
    .d12 , .d22 , .d32 , .d42 , .d52 , .d62 , .d72 ,  .d82
    {
        margin-left: 150px;
        display: flex;
        flex-direction: row;
        /* border: 1px solid red; */
        font-size: 30px;
        width: 40%;
        /* margin-left: 60px; */
        justify-content:space-between;
        
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
            <h1>Learning Licence Details</h1>
        </div>

        <?php

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

    $query = "select * from learning_lis_data where Username='$uname' ;";

    $select = $con->query($query);
    while($row=mysqli_fetch_assoc($select))
    {

    

?>
        <div class="d1">
            <div class="d11">
                <p>First Name:</p>
                <p><?php echo $row['First_Name'];?></p>
            </div>
            <div class="d12">
                <p>Middle Name:</p>
                <p><?php echo $row['Middle_Name'];?></p>
            </div>
        </div>
        <div class="d2">
            <div class="d21">
                <p>Last Name:</p>
                <p><?php echo $row['Last_Name'];?></p>
            </div>
            <div class="d22">
                <p>Birth Date:</p>
                <p><?php echo $row['Birth_Date'];?></p>
            </div>
        </div>
        <div class="d3">
            <div class="d31">
                <p>Phone no:</p>
                <p><?php echo $row['Phone_no'];?></p>
            </div>
            <div class="d32">
                <p>Gmail:</p>
                <p><?php echo $row['Email'];?></p>
            </div>

        </div>
        <div class="d4">
            <div class="d41">
                <p>Address:</p>
                <p><?php echo $row['Address'];?></p>
            </div>
            <div class="d42">
                <p>State:</p>
                <p><?php echo $row['State'];?></p>
            </div>

        </div>
        <div class="d5">
            
        
        <div class="d51">
            <p>City:</p>
            <p><?php echo $row['City'];?></p>
            
        </div>
        <div class="d52">
            <p>Education Qualification:</p>
            <p><?php echo $row['Education'];?></p>
            
        </div>
    </div>
    <div class="d6">
        <div class="d61">
        <p>Type of Licence:</p>
        <p><?php echo $row['Licence_Type'];?></p>
        </div>
        <div class="d62">
            <p>Status</p>
            <p><?php echo $row['Status'];?></p>
        </div>
    </div>
    <div class="d7">
        <div class="d71">
            <p>Action Date:</p>
            <p><?php echo $row['Action_Date'];?></p>
        </div>
    </div>
    </div>
<?php
}
?>

        
    </div>
</div>

</body>
</html>