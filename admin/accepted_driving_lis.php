<?php

session_start();

$uname = $_SESSION['name'];
$sname = $_SESSION['name'];

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
        input , button{
          background-color: transparent;
        }
        .non
        {
        	border:none;
        	font-size: 20px ;
            font-weight: bold;
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
                <h1>Rejected Learning Licence</h1>
            </div>
            <div class="details">
            
            	<table>
            	<tr>
            			<td>
                            First Name:
                        </td>
                        
                        <td>
                            Middle Name:
                        </td>
                        <td>
                        	User Name:
                        </td>
                        <td>
                            Phone No:
                        </td>
                        
                        <td>
                            Email Id:
                        </td>
                        <td>
                            Type Of Licence:
                        </td>
                        
                        <td>
                        	Action Date:
                        </td>
                        <td>
                        	Status
                        </td>
                        
                        
            	</tr>
            	
                <?php
                
	


$query = "select * from driving_lis_data where Status='accept';";

$select = $con->query($query);
while($row=mysqli_fetch_assoc($select))
{
    ?>
                
                
                
	
            	<tr>
            			<td>
                            <?php echo $row['First_Name']?>
                        </td>
                        <td>
                        <?php echo $row['Middle_Name']?>
                        </td>
                        <td>
                        <?php echo $row['Username']?>
                        </td>
                        <td>
                        <?php echo $row['Phone_no']?>                       
                        </td>
                        <input name="uname" type="hidden" value="<?php echo $row['Username']?>">
                        <td>
                        <?php echo $row['Email']?>
                        </td>
                        <td>
                        <?php echo $row['Licence_Type']?>
                        </td>
                        
                        
                        <td>
                        <?php echo $row['Action_Date']?>
                        </td>
                        
                        <td>
                        <?php echo $row['Status']?>
                        </td>
                        
            		
            	</tr>
            	 <?php
                 
}
                 ?>
            	</table>
            	
            </div>
           
        </div>
        <p><?php if(isset($_POST['submit'])){echo $msg;}?></p>
    </div>
    
</body>
</html>