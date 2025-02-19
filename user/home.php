<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        body {
            margin: 0;
            

        }

        h3 {
            color: white;
        }

        /* navigation bar */
        .nav {
            display: flex;
            flex-direction: row;
            background-color: rgba(0, 0, 0);
            opacity: 0.8;
            width: 100%;
            position: fixed;
        }

        .links {
            display: flex;
            justify-content: end;
            width: 900px;
            /* border: 1px solid; */
        }

        ul {
            display: flex;
            flex-direction: row;
        }

        li {
            list-style: none;

        }

        .links a {
            text-decoration: none;
            margin-right: 20px;
            color: white;
            position: relative;

        }

        .heffect a:hover {
            font-weight: bold;
        }

        .heffect a:hover:after {
            width: 100%;
        }

        .heffect a::after {
            content: "";
            position: absolute;
            top: 20px;
            left: 0px;
            height: 2px;
            width: 0;
            background-color: rgb(233, 10, 207);
            ;

            transition: all 0.9s;

        }
        a{
	text-decoration: none;
	color: rgb(241, 8, 175);
	display: flex;
	justify-content: center;
	/* margin-top: 10px; */
    
}

        .mmain{
		display: flex;
		height: 800px;
		width:100%;
		border: 1px solid red;
		align-items: center;
		justify-content: center;
	}

        .hed {
            height: 700px;
            border: 1px solid;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("../image/cars_img.jpg") no-repeat center center/cover;
        }
        h1{
        	font-size: 5em;
        }

        .about,
        .contact {
            /* height: 60px; */
            background-color: lightslategray;
        }

        .part1,
        .part2,
        .part3 {
            display: flex;
            flex-direction: row;
            align-items: center;

        }

        .part1 img {
            height: 30px;
            margin-right: 10px;
        }

        .part2 img {
            height: 30px;
            margin-right: 10px;
        }

        .part3 img {
            height: 30px;
            margin-right: 10px;
        }

        .submenu {
            color: red;
            display: none;
            background-color: azure;
            
            margin-top: 10px;

        }

        .submenu ul {
            display: flex;
            flex-direction: column;

        }

        .submenu a {
            /* padding-bottom: 10px; */
            padding-top: 10px;
        }

        .links ul li:hover .submenu {
            display: inline;
            position: relative;
            left: 20px;

        }

        .submenu a:hover:after {
            width: 0;
        }
    </style>
</head>

<body>
    <div class="nav">
        <h3>RTO Management</h3>
        <div class="links">
            <ul class="heffect">
                <li><a href="../user/home.php">Home</a></li>
                <li><a href="../user/about.php">About us</a></li>
                <!-- <li><a href="#Contact">Contact Us</a></li> -->
                <li><a href="../user/login.php">Login</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="../user/login.php">User</a></li>
                            <li><a href="../admin/admin_login.php">Admin</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

    </div>


    <div class="hed">
        <h1>Welcome To RTO Management System</h1>
    </div>
    

    <div class="contact" id="Contact">
        <h2>Contact Us</h2>
    </div>
    <div class="cmain">
        <div class="part1">
            <img src="../image/icons/icons8-email-30.png" alt="">
            <p>rtoservice@gmail.com</p>
        </div>
        <div class="part2">
            <img src="../image/icons/icons8-phone-50.png" alt="">
            <p>
                714327394
            </p>
        </div>
        <div class="part3">
            <img src="../image/icons/icons8-time-50.png" alt="">
            <p>10:00 TO 5:00</p>
        </div>
    </div>
</body>
</html>