<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            margin: 0;
            background-color: #f4f4f4;		
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
            /*  position: fixed; */
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
        
        a:hover {
            font-weight: bold;
        }
        
        a:hover:after {
            width: 100%;
        }
        
        a::after {
            content: "";
            position: absolute;
            top: 20px;
            left: 0px;
            height: 2px;
            width: 0;
            background-color: rgb(233, 10, 207);;
            transition: all 0.9s;
        }
        
        /* content  */
        .photos-1 {
            text-align: center;
        }
        .photos-2 {
            text-align: center;
        }
        .photos-3 {
            text-align: center;
        }
        .about {
            margin-top: 0px;
        }
        
        .photo {
            margin: 20px;
        }
        
        .photo img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
        }
        
        .photo p {
            margin-top: 10px;
            font-size: 16px;
        }
        </style>
        </head>
        <body>
            <div class="nav">
                <h3>RTO Management</h3>
                <div class="links">
                    <ul>
                        <li><a href="../user/home.php">Home</a></li>
                        <li><a href="../user/about.php">About us</a></li>
                        
                        <li><a href="../user/login.php">Login</a></li>
                    </ul>
                </div>
                
         </div>
         
             
                <div class="about">
                    <h2>About Us</h2>
                 </div>
                 <br>
                 <p>
                    The Ministry of Road Transport & Highways (MoRTH) has been facilitating computerization of over 1300+ Road Transport Offices (RTOs) across the country. RTOs issue Registration Certificate (R.C.) & Driving License (D.L.) that are mandatory requirements and are valid across the country, subject to certain provisions and permissions.</p>
                    <br>
                <section class="photos-1">
                    <div class="photo">
                        <img src="../image/1.jpeg">
                    </div>
                </section>
                <br>
                <h2>Our Vision</h2>
                <br>
                <p>To improve the quality of service delivery to the citizen and the quality of work environment of the RTOs.</p>
                <br>
                <h2>Our Mission</h2>
                <br>
                <p>To automate all Vehicle Registration and Driving License related activities in transport authorities of country with introduction of smart card technology to handle issues like inter state transport vehicle movement and to create state and national level registers of vehicles/DL information.</p>
                <br>
                <section class="photos-2"></section>
                    <div class="photo">
                        <center><img src="../image/2.jpeg"></center>
                    </div>
                </section>
                <br>
                <h2>Our Objectives</h2>
                <br>
                <p>The latest initiative has been to centralize both these applications for ensuring higher tranparency, security and reliability of operations through a countrywide unified database and provision of a highly citizen and trade centric web enabled environment. The new application being developed would provide for a multi-user environment wherein the end customers (citizens) may be empowered to perform most of the RTO related transactions (including payments) either from the comfort of home or from authorized third party service provider/s in their vicinity. This will also help, to a large extent, in removing the hassles and queues faced by citizens currently (in visiting RTOs for elementary types of transactions),minimizing the extensive paperwork currently being done on the ground and reducing the possibility of middlemen exploiting the uneducated / uninformed citizens. Going forward, mobile based applications would be developed and systems utilizing the Aadhar Based identification would also be integrated with the Unified RTO database for higher security and ease of operations.</p>
                <br>
                <section class="photos-3"></section>
                    <div class="photo">
                        <center><img src="../image/3.jpeg"></center>
                    </div>
                </section>
            
         </div>
        </body>
</html>