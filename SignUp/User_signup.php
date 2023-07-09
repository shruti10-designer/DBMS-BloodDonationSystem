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
    
    $name = $_POST['name'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    if( $pass1== $pass2)
    {
    $sql="INSERT INTO users (user_pass ,user_name ,user_phn,user_address ,user_city,user_state ,user_pin ) VALUES ('$pass1', '$name',$mobile,'$address','$city','$state','$pin');";
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