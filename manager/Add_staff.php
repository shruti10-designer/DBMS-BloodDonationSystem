<?php
session_start();
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
    
    $dep_id = $_POST['dep_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $phno = $_POST['phno'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $sal = $_POST['sal'];
    $man_id=$_SESSION['user'];
    $sql="SELECT br_id FROM manager WHERE man_id=$man_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $br_id=$row['br_id'];
    $date=date("Y/m/d");
    $sql="INSERT INTO staff (dep_id ,br_id ,staff_firstname ,staff_lastname ,staff_phn ,staff_address ,staff_pin ,staff_city ,staff_state,staff_dob,staff_gender,staff_salary,staff_date_of_joining ) VALUES ($dep_id,$br_id,'$firstname','$lastname','$phno','$address','$pin','$city','$state','$dob','$gender',$sal,'$date');";
    $con->query($sql);
    $last_id = $con->insert_id;
    $sql="SELECT no_of_workers FROM department WHERE dep_id=$dep_id AND br_id=$br_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $no_of_workers=$row['no_of_workers'];
    $no_of_workers++;
    $sql="UPDATE department SET no_of_workers=$no_of_workers WHERE dep_id=$dep_id AND br_id=$br_id;";
    $result=$con->query($sql);
    $msg='Success id = '.$last_id;
      $con->close();
    
      $loc="Add_staff.html";
      echo "<script type='text/javascript'>
      alert('$msg');
      window.location.href='$loc';
      </script>";
?>