<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    session_start();
?>

<h1><?php echo $_SESSION['username'];?></h2>
<h1><?php echo $_SESSION['password'];?></h2>
   <?php 
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $bdate = $_POST['birthdate'];
            $uname = $_POST[''];
            $pass = $_POST[''];
            $email = $_POST['gmail'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $eq = $_POST['eq'];
            $ltype = $_POST['licence type'];
            $status = "pendding";

            $query = "insert into driving_lis_data values('$fname','$mname','$lname','$uname','$pass','$bdate','$phone','$email','$address','$state','$city','$eq','$ltype','$status');";

            ?>
</body>
</html>