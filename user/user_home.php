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
   .c1 , .c2 , .c3{
       margin-bottom: 30px;
   }
   .c1 a , .c2 a , .c3 a , .c4 a{
       /* border: 1px solid;  */
       
       padding-right: 0px;
       font-size: 25px;
       color: blueviolet;
   }
   .c1 , .c2 , .c3 , .c4{
       display: flex;
       flex-direction: row;
       justify-content:space-around
       
   }
   .c1 div , .c2 div , .c3 div , .c4 div{
       width: 400px;
       display: flex;
      justify-content: center;
       flex-direction: column;
       align-items: center;
       border: 1px solid;
       
       padding: 10px;
       border-radius: 10px;
   }
   h3{
       font-size: 30px;
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
<?php
        session_start();
        $uname = $_SESSION['username'];
		$name = $_SESSION['name']; 

?>
<body>

<din class="main">
    <div class="nav">
        <div class="name">
            <h3>User | Page</h3>
        </div>
        
        <div class="link">
            <h4 class="sname">Hey <?php echo $name; ?></h4>
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
            <h1>DashBoard</h1>
        </div>
        <div class="c1">
            <div class="creg">
                <h3>Apply for car registration</h3>
                <a href="../user/car_register_form.php">Apply</a>
            </div>
            <div class="creg">
           <h3>Check car registration Status</h3>
           <a href="../user/show_car_register.php">Check</a>
        </div>
        </div>
       
     
     <div class="c2">
        <div class="ll">
            <h3>Apply for Learning Licence</h3>
            <a href="../user/learning_licence_form.php">Apply</a>
        </div>
       <div class="lstatus">
            <h3>Check learning licence status</h3>
            <a href="../user/show_learning_licence.php">Check</a>
        </div>
     </div>
     <div class="c3">
        <div class="dl">
            <h3>Apply for Driving Licence</h3>
            <a href="../user/driving_licence_form.php">Apply</a>
        </div>
        <div class="dstatus">
            <h3>Driving licence status</h3>
            <a href="../user/show_driving_licence.php">Check</a>
     </div>
 </div>
 <div class="c4">
    <div class="profile">
       <h3>Update Profile</h3>
       <a href="../user/user_update_profile.php">Update</a>
    </div>
</div>
    
</div>
</body>
<?php
   

?>

</html>