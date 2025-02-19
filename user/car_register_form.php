<?php
    session_start();

    $sname = $_SESSION['name'];
    
		if(isset($_POST['submit']))
		{
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $bdate = $_POST['birthdate'];
            $uname = $_SESSION['username'];
            $pass = $_SESSION['pass'];
            $email = $_POST['gmail'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $vname = $_POST['vehical_name'];
            $ltype = $_POST['vehicaltype'];
            $status = "pendding";


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

            $query = "insert into car_register_data values('$fname','$mname','$lname','$uname','$pass','$bdate','$phone','$email','$address','$state','$city','$vname','$ltype','$status',' ');";

            $insert = $con ->query($query);

            if($insert)
            {
                header("location: user_home.php");
            }
            else
            {
                echo "not insert".$con->error;
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
    .r51{
        margin-right: 10%;
    }
    .r42 {
       
        display: flex;
        flex-direction: column;
        margin-left: 10%;
        
        
    }
    .state{
        margin-bottom: 30px;
        margin-left: 0p;
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
<!-- <%
String name = (String) session.getAttribute("name");
%> -->
<din class="main">
    <div class="nav">
        <div class="name">
            <h3>User | Page</h3>
        </div>
        <div class="link">
        <h4 class="sname">Hey <?php echo $sname;?></h4>
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
            <h1>Car Register Form</h1>
        </div>
        <div class="c1">
        
        <form action="" method="post">
        
            <div class="r1">
                <div class="r11">
                    <p>Surname: </p>
                    <input type="text" name="fname">
                </div>
                <div class="r12">
                    <p> Name: </p>
                    <input type="text" name="mname">
                </div>
            </div>
            <div class="r2">
                <div class="r21">
                    <p>Father Name: </p>
                    <input type="text" name="lname">
                </div>
                <div class="r22">
                    <p>Birth Date:</p>
                    <input type="date" name="birthdate" placeholder="dd/mm/yyyy">
                </div>
            </div>
            <div class="r3">
                <div class="r31">
                    <p>Phone No: </p>
                    <input type="number" name="phone">
                </div>
                <div class="r32">
                    <p>Gmail Id: </p>
                    <input type="email" name="gmail">
                </div>
            </div>
            <div class="r4">
                <div class="r41">
                    <p>Address:</p>
                    <textarea rows="5" cols="20" name="address"></textarea>
                </div>
                <div class="r42">
                    <div class="state">                        
                    <p>State:</p>
                    <select name="state">
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharastra">Maharastra</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Andhra Pradesh">Andhara Pradesh</option>
                    </select>
                    </div>
                    <div class="city">                        
                    <p>City:</p>
                    <select name="city">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Porbandar">Porbandar</option>
                        <option value="Bhuj">Bhuj</option>
                    </select>
                    </div>

                </div>
                
            </div>
            <div class="r5">
                <div class="r51">
                <p>Name of vehical </p>
                <input type="text" name="vehical_name">
                </div>
                <div class="r52">
                    <p> Type of Vehical:</p>
                    <select name="vehicaltype">
                        <option value="Two Wheeler">Two Wheeler</option>
                        <option value="Four Wheeler">Four Wheeler</option>
                    </select>
                </div>
            </div>
            <div class="r6">
                <button type="submit" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>