
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
/* height:800px; */
display:flex;
flex-direction:column;
align-items:center;
/* justify-content: center; */
text-align:center;
}
table{
text-align:center;
width:600px;
border:1px solid;
}
th{
/* font-width:bold; */
background-color:green;
}
tr{
border:1px solid;
}
td{
width:100px;
text-align:center;
border:none;
}
</style>
</head>
<body>
	<h1>User Details</h1>
	<table>
	<tr>
	<th>First_name</th>
	<th>Last_name</th>
	<th>User_name</th>
	<th>Password</th>
	<th>Email_id</th>
	<th>Phone_number</th>
	
	</tr>
	
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

$query = "select * from user_data;";

$select = $con->query($query);
while($row=mysqli_fetch_assoc($select))
{
    ?>
    <tr>
        <td><?php echo $row['First_Name']?></td>   
        <td><?php echo $row['Last_Name']?></td>
		<td><?php echo $row['Username']?></td> 
		<td><?php echo $row['Pass']?></td> 
		<td><?php echo $row['Email']?></td> 
		<td><?php echo $row['Phone_no']?></td>  
    <tr>
    <?php

}
?>
	
	
	
	
	</table>
</body>
</html>