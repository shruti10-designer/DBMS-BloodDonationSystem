<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="About_you_donor.css">
</head>
<body>
    <div id="cont">
        <div id="nav">
            <ul>
			<li> <a class="active" href="About_you_donor.php">About you</a> </li>
                <li><a  href="Donor_previous_record.php">Your previous record</a></li>
                <li><a href="Edit_profile.html">Edit profile</a></li>
                <li><a href="/Blood_Donation_system/login/login.html">Log out</a></li>
</ul>
        </div>
        <div id="main">
            <div id="head">
                
            </div>
            <div id="con" >
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



					$sql="SELECT * FROM donor where donor_id=".$_SESSION['user'].";";

					$result=$con->query($sql);

					$row = $result->fetch_assoc();
					$donor_id =$row['donor_id'];
					$donor_firstname =$row['donor_firstname'];
					$donor_lastname  =$row['donor_lastname'];
					$donor_phn   =$row['donor_phn'];
					$donor_address  =$row['donor_address'];
					$donor_city   =$row['donor_city'];
					$donor_state  =$row['donor_state'];
					$donor_pin   =$row['donor_pin'];
					$donor_dob  =$row['donor_dob'];
					$donor_gender  =$row['donor_gender'];
					$donor_bldgrp  =$row['donor_bldgrp'];
						
					
					$con->close();

					echo "<tr>
				    <td><b>Donor ID:</b></td>
					<td >$donor_id </td>
				</tr>
					
					<tr>
				    <td><b>First name:</b></td>
					<td >$donor_firstname </td>
				</tr>
				<tr>	
					<td><b>Last name:</b></td>
					<td>$donor_lastname</td>
				</tr>
				
				<tr>
					<td><b>Phone no:</b></td>
					<td>$donor_phn</td>
				</tr>
				<tr>
					<td><b>Gender:</b></td>
					<td>$donor_gender</td>
				</tr>
				
				<tr>
					<td><b>Date of Birth:</b></td>
					<td >$donor_dob</td>
				</tr>
				<tr>
					<td><b>Address:</b></td>
					<td>$donor_address</td>
				</tr> 
				<tr>
					<td><b>City:</b></td>
					<td >$donor_city </td>
				</tr>
				<tr>
					<td><b>State:</b></td>
					<td >$donor_state</td>
				</tr>
				<tr>
					<td><b>Pin:</b></td>
					<td>$donor_pin</td>
				</tr>
				<tr>
					<td><b>Blood group:</b></td>
					<td>$donor_bldgrp</td>
				</tr>";

					?>
				</h4>
				</table>
				
				
            </div>
            
        </div>
    </div>

    <script src="Donor.js"></script>
</body>
</html>