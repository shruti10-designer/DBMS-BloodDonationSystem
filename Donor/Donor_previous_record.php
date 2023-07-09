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
    <link rel="stylesheet" href="Donor_previous_record.css">
</head>
<body>
    <div id="cont">
        <div id="nav">
            <ul>
            <li> <a href="About_you_donor.php">About you</a> </li>
                <li><a class="active" href="Donor_previous_record.php">Your previous record</a></li>
                <li><a href="Edit_profile.html">Edit profile</a></li>
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
                      <th>Branch Address</th>
                      <th>Branch City</th>
                      <th>Donation Date</th>
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



                      $sql="SELECT * FROM donations where donor_id=".$_SESSION['user'].";";

                      $result=$con->query($sql);

                      $i=1;

                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                          $br_id=$row['br_id'];
                          $sql1="SELECT br_address,br_city FROM branch WHERE br_id=$br_id";
                          $result1=$con->query($sql1);
                          $row1 = $result1->fetch_assoc();

                          echo "<tr>
                          <td>$i</td>
                          <td>" . $row1["br_address"]. "</td>
                          <td>" . $row1["br_city"]. "</td>
                          <td>" . $row["dona_date"]. "</td>
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

    <script src="script.js"></script>
</body>
</html>