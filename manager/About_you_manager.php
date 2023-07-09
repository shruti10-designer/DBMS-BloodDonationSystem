<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="About_you_manager.css">
</head>
<body>
    <div id="cont">
        <div id="nav">
            <ul>
            <li> <a style="background-color: chocolate;" href="About_you_manager.php">About you</a> </li>
              <li><a  href="Manager_new_record.php">New orders</a></li>
              <li><a  href="Manager_previous_record.php">Your previous record</a></li>
              <li><a  href="view_departments.php">View Department</a></li>
              <li><a  href="view_staff.php">View staff</a></li>
              <li><a  href="Add_staff.html">Add staff</a></li>
              <li><a  href="Add_donations.html">Add Donations</a></li>
              <li><a href="/Blood_Donation_system/login/login.html">Log out</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="head">
                
            </div>
            <div id="con">
               <h1 align='center'>ABOUT YOU</h1>
				<br>
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



				$sql="SELECT * FROM manager where man_id=".$_SESSION['user'].";";

				$result=$con->query($sql);

				$row = $result->fetch_assoc();
				$man_id =$row['man_id'];
                $br_id =$row['br_id'];
                $man_firstname =$row['man_firstname'];
                $man_lastname  =$row['man_lastname'];
                $man_phn   =$row['man_phn'];
                $man_address  =$row['man_address'];
                $man_city   =$row['man_city'];
                $man_state  =$row['man_state'];
                $man_pin   =$row['man_pin'];
                $man_dob  =$row['man_dob'];
                $man_gender  =$row['man_gender'];
                $man_salary  =$row['man_salary'];
                $man_date_of_join  =$row['man_date_of_joining'];
                    
                $sql="SELECT * FROM branch WHERE br_id=$br_id;";
                $result=$con->query($sql);
                $row = $result->fetch_assoc();
                $a_p=$row['a_p'];
                $a_n=$row['a_n'];
                $b_p=$row['b_p'];
                $b_n=$row['b_n'];
                $o_p=$row['o_p'];
                $o_n=$row['o_n'];
                $ab_p=$row['ab_p'];
                $ab_n=$row['ab_n'];

                $con->close();

                echo " <tr>
                <td><b>Manager ID:</b></td>
                <td>$man_id </td>
               </tr>

               <tr>
                <td><b>Manager ID:</b></td>
                <td>$br_id </td>
               </tr>
        <tr>
                <td><b>First name:</b></td>
                <td>$man_firstname </td>
            </tr>
            <tr>    
                <td><b>Last name:</b></td>
                <td>$man_lastname</td>
            </tr>
      
            <tr>
                <td><b>Phone no:</b></td>
                <td>$man_phn</td>
            </tr>
            <tr>
                <td><b>Gender:</b></td>
                <td>$man_gender</td>
            </tr>
            <tr>
                <td><b>Date of Birth:</b></td>
                <td>$man_dob</td>
            </tr>
            <tr>
                <td><b>Your Salary:</b></td>
                <td>$man_salary</td>
            </tr>
            <tr>
                <td><b>Date of Joining:</b></td>
                <td>$man_date_of_join</td>
            </tr>
            <tr>
                <td><b>Address:</b></td>
                <td>$man_address</td>
            </tr> 
            <tr>
                <td><b>City:</b></td>
                <td>$man_city </td>
            </tr>
            <tr>
                <td><b>State:</b></td>
                <td>$man_state</td>
            </tr>
            <tr>
                <td><b>Pin:</b></td>
                <td>$man_pin</td>
            </tr>
            <tr>
                <td><b>A+:</b></td>
                <td>$a_p</td>
            </tr>
            <tr>
                <td><b>A-:</b></td>
                <td>$a_n</td>
            </tr>
            <tr>
                <td><b>B+:</b></td>
                <td>$b_p</td>
            </tr>
            <tr>
                <td><b>B-:</b></td>
                <td>$b_n</td>
            </tr>
            <tr>
                <td><b>O+:</b></td>
                <td>$o_p</td>
            </tr>
            <tr>
                <td><b>O-:</b></td>
                <td>$o_n</td>
            </tr>
            <tr>
                <td><b>AB+:</b></td>
                <td>$ab_p</td>
            </tr>
            <tr>
                <td><b>AB-:</b></td>
                <td>$ab_n</td>
            </tr>";

				?>

				</h4>
				</table>
				
            </div>
        </div>
    </div>

    <script src="Manager.js"></script>
</body>
</html>