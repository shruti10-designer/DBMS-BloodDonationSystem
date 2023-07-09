<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="About_you_user.css">
</head>
<body>
    <div id="cont">
        <div id="nav">
            <ul>
                <li> <a class="active" href="About_you_user.php">About you</a> </li>
                <li><a href="place_order.html">place orders</a></li>
                <li><a href="User_previous_orders.php">Your previous record</a></li>
                <li><a href="Edit_profile.html">Edit profile</a></li>
                <li><a href="/Blood_Donation_system/login/login.html">Log out</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="head">
                
            </div>
            <div id="con">
               <h1 align='center'>ABOUT YOU</h1>
				<br><br>
				<table align='center' style="width:50%" class="center" >
				<h4>
				<?php

				// Set connection variables
				$server = "localhost";
				$username = "root";
				$password = "";
				$db="Blood_Donation_system";

				// Create a database connection
				$con = mysqli_connect($server, $username, $password,$db);

				// Check for connection success
				if(!$con){
					die("connection to this database failed due to" . mysqli_connect_error());
				}



				$sql="SELECT * FROM users where user_id=".$_SESSION['user'].";";

				$result=$con->query($sql);

				$row = $result->fetch_assoc();
				$user_id =$row['user_id'];
				$user_name =$row['user_name'];
				$user_phn =$row['user_phn'];
				$user_address =$row['user_address'];
				$user_city =$row['user_city'];
				$user_state =$row['user_state'];
				$user_pin =$row['user_pin'];
		
				$con->close();


				echo "<tr>
				<td><b>User ID:</b></td>
				<td>$user_id </td>
			</tr>
			<tr>
				<td><b>Name:</b></td>
				<td >$user_name </td>
			</tr>
			
			<tr>
				<td><b>Phone no:</b></td>
				<td>$user_phn</td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td>$user_address</td>
			</tr> 
			<tr>
				<td><b>City:</b></td>
				<td >$user_city </td>
			</tr>
			<tr>
				<td><b>State:</b></td>
				<td >$user_state</td>
			</tr>
			<tr>
				<td><b>Pin:</b></td>
				<td>$user_pin</td>
			</tr>";
				?>
				</h4>
				</table>
				
            </div>
        </div>
    </div>

    <script src="User.js"></script>
</body>
</html>