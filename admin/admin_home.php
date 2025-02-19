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
        width:75%;
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
        width:80%;
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
    
    /* sub content */

    .c1 div , .c2 div ,.c3 div{ 
        width: 200px;
        border: 1px solid;
        padding: 10px;
        border-radius: 10px;
    }
    .c1{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 20px;
        margin-top: 50px ;
       
    }
     .c1 .user{
        background-color: chartreuse;
        background-color: #c1c1c1;
        box-shadow: 20px 20px 60px #00000041,inset -20px;
    }
    .c1 .city{
        background-color: blueviolet;
    }
    .c1 .state{
        background-color: chocolate;
    }
    .c2 .rejected{
        background-color: bisque;
    }
    .c2 .accept{
        background-color: cornflowerblue;
    }
    .c2 .aplications{
        background-color: aqua;
    }
    .c3 .rejected{
        background-color:darkseagreen;
    }
    .c3 .accept{
        background-color: steelblue;
    }
    .c3 .aplications{
        background-color: tan;
    } 
    .c2 , .c3{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 20px;
    }
    .name{
        margin-right: 30px;
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
    <?php
    
    session_start();

    $name = $_SESSION['name'];
    $id = $_SESSION['id'];
    
    ?>
<div class="main">
    <div class="nav">
        <div class="name">
            <h3>User| Page</h3>
        </div>
        
        <div class="link">
        <h4 class="sname" >Hey <?php echo $name; ?></h4>
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
    <!-- part 2.1 -->
    <div class="hed">
        <h1>DashBoard</h1>
    </div>
    <div class="c1">
    <div class="user">
        <h3>Total Register user</h3>
        <a href="../user/show_userdetail.php">View Detail</a>
    </div>
    <div class="city">
        <h3>Total Cities</h3>
        <a href="../user/show_city.php">View Detail</a>
    </div>
    <div class="state">
        <h3>Total States</h3>
        <a href="../user/show_state.php">View Detail</a>
    </div>
    </div>
    <!-- part 2.2 -->
    <div class="hed2">
        <h2>Learning license</h2>
    </div>
    <div class="c2">
    <div class="aplications">
        <h3>Total Aplication</h3>
        <a href="../admin/accept_learning_lis.php">View Detail</a>
    </div>
    <div class="rejected">
        <h3>Total Reject Aplication</h3>
        <a href="../admin/reject_learning_lis.php">View Detail</a>
    </div>

    
    <div class="accept">
        <h3>Total Accept Aplication</h3>
        <a href="../admin/accepted_learning_lis.php">View Detail</a>
    </div>
    </div>
    <div class="hed2">
        <h2>Driving license</h2>
    </div>
    
    <div class="c3">
    <div class="aplications">
        <h3>Total Aplication</h3>
        <a href="../admin/accept_driving_lis.php">View Detail</a>
    </div>
    <div class="rejected">
        <h3>Total Reject Aplication</h3>
        <a href="../admin/reject_driving_lis.php">View Detail</a>
    </div>

    
    <div class="accept">
        <h3>Total Accept Aplication</h3>
        <a href="../admin/accepted_driving_lis.php">View Detail</a>
    </div>
    </div>

</div>
</div>
</div>
</body>
</html>