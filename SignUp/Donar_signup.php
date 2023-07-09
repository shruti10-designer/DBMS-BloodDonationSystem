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
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $group = $_POST['group'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $gender = $_POST['gender'];

    if( $pass1== $pass2)
    {
    $sql="INSERT INTO donor (donor_pass ,donor_firstname,donor_lastname  ,donor_phn,donor_address ,donor_city  ,donor_state ,donor_pin  ,donor_dob ,donor_gender ,donor_bldgrp ) VALUES ('$pass1', '$fname','$lname',$mobile,'$address','$city','$state','$pin','$dob','$gender','$group');";
    $con->query($sql);
    $last_id = $con->insert_id;
    $msg='Success id = '.$last_id;
      $con->close();
    }
    else
    {
        $msg="password unmatch";
    }
    
      $loc="/Blood_Donation_system/login/login.html";
      echo "<script type='text/javascript'>
      alert('$msg');
      window.location.href='$loc';
      </script>";
?>