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
    <link rel="stylesheet" href="Manager_previous_record.css">
</head>
<body>
    <div id="cont">
        <div id="nav">
            <ul>
            <li> <a style="background-color: transparent;" href="About_you_manager.php">About you</a> </li>
              <li><a  href="Manager_new_record.php">New orders</a></li>
              <li><a style="background-color: chocolate;" href="Manager_previous_record.php">Your previous record</a></li>
              <li><a  href="view_departments.php">View Department</a></li>
              <li><a  href="view_staff.php">View staff</a></li>
              <li><a href="Add_staff.html">Add staff</a></li>
              <li><a  href="Add_donations.html">Add Donations</a></li>
              <li><a href="/Blood_Donation_system/login/login.html">Log out</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="head">
                
            </div>
            <div id="con">
                <h1>Your Previous Records</h1>
                <br><br>
                <table class="center">
                <tr>
                      <th>Sl No</th>
                      <th>Order ID</th>
                      <th>Order Date</th>
                      <th>User ID</th>
                      <th>A+</th>
                      <th>A-</th>
                      <th>B+</th>
                      <th>B-</th>
                      <th>O+</th>
                      <th>O-</th>
                      <th>AB+</th>
                      <th>AB-</th>
                      <th>Status</th>
                    </tr>
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
        $sql="SELECT br_id FROM manager where man_id=".$_SESSION['user'].";";
        $result=$con->query($sql);
        $row = $result->fetch_assoc();
        $br_id=$row['br_id'];
				$sql="SELECT * FROM orders where br_id=$br_id AND NOT status='processing' ORDER BY ord_date DESC;";

				$result=$con->query($sql);
                $i=1;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                      echo "<tr>
                      <td>$i</td>
                      <td>" . $row["ord_id"]. "</td>
                      <td>" . $row["ord_date"]. "</td>
                      <td>" . $row["user_id"]. "</td>
                      <td>" . $row["a_p"]. "</td>
                      <td>" . $row["a_n"]. "</td>
                      <td>" . $row["b_p"]. "</td>
                      <td>" . $row["b_n"]. "</td>
                      <td>" . $row["o_p"]. "</td>
                      <td>" . $row["o_n"]. "</td>
                      <td>" . $row["ab_p"]. "</td>
                      <td>" . $row["ab_n"]. "</td>
                      <td>" . $row["status"]. "</td>
                    </tr>";
                    $i++;
                    }
                  } else {
                    echo "0 results";
                  }
                  $con->close();
                    ?>
                  </table>
            </div>
        </div>
    </div>

    <script src="Manager.js"></script>
</body>
</html>