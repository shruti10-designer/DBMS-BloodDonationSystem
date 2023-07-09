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
    
    $staff_id = $_POST['staff_id'];
    $sql="SELECT dep_id,br_id FROM staff WHERE staff_id=$staff_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $br_id=$row['br_id'];
    $dep_id=$row['dep_id'];
    $sql="DELETE FROM staff WHERE staff_id=$staff_id;";
    $con->query($sql);
    $sql="SELECT no_of_workers FROM department WHERE dep_id=$dep_id AND br_id=$br_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $no_of_workers=$row['no_of_workers'];
    $no_of_workers--;
    $sql="UPDATE department SET no_of_workers=$no_of_workers WHERE dep_id=$dep_id AND br_id=$br_id;";
    $result=$con->query($sql);
    $con->close();
      $msg="Success";
      $loc="Add_staff.html";
      echo "<script type='text/javascript'>
      alert('$msg');
      window.location.href='$loc';
      </script>";
?>