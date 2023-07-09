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
    
    $donor_id = $_POST['donor_id'];
    $man_id=$_SESSION['user'];
    $sql="SELECT br_id FROM manager WHERE man_id=$man_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $br_id=$row['br_id'];
    $date=date("Y/m/d");
    $sql="INSERT INTO donations VALUES($donor_id,$br_id,'$date');";
    $con->query($sql);
    $sql="SELECT * FROM donor WHERE donor_id=$donor_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $grp=$row['donor_bldgrp'];
    if($grp=="A+")
    {
        $grp="a_p";
    }
    if($grp=="A-")
    {
        $grp="a_n";
    }
    if($grp=="B+")
    {
        $grp="b_p";
    }
    if($grp=="B-")
    {
        $grp="b_n";
    }
    if($grp=="ABb+")
    {
        $grp="ab_p";
    }
    if($grp=="AB-")
    {
        $grp="ab_n";
    }
    if($grp=="O+")
    {
        $grp="o_p";
    }
    if($grp=="O-")
    {
        $grp="o_n";
    }
    $sql="SELECT $grp FROM branch WHERE br_id=$br_id;";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    $num=$row["$grp"];
    $num++;
    $sql="UPDATE branch SET $grp=$num WHERE br_id=$br_id;";
    $con->query($sql);
    $con->close();
      $msg="Success";
      $loc="Add_donations.html";
      echo "<script type='text/javascript'>
      alert('$msg');
      window.location.href='$loc';
      </script>";
?>