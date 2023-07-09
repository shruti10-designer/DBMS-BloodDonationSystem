<?php

session_start();

	$user=$_POST['username'];
    $pass=$_POST['pass'];
    $typeofacc=$_POST['typeofacc'];
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


if($typeofacc==1)
{
$sql="SELECT * FROM donor WHERE donor_id=$user;";

$result=$con->query($sql);

    $row = $result->fetch_assoc();
      if($row['donor_pass']===$pass)
      {
        $_SESSION['user']=$user;
        $msg="success";
        $loc="/Blood_Donation_system/Donor/About_you_donor.php";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='$loc';
        </script>";
      }
    }

    if($typeofacc==2)
{
$sql="SELECT * FROM users WHERE user_id=$user;";

$result=$con->query($sql);

    $row = $result->fetch_assoc();
      if($row['user_pass']===$pass)
      {
        $_SESSION['user']=$user;
        $msg="success";
        $loc="/Blood_Donation_system/user/About_you_user.php";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='$loc';
        </script>";
      }
    }

    if($typeofacc==3)
{
$sql="SELECT * FROM manager WHERE man_id=$user;";

$result=$con->query($sql);

    $row = $result->fetch_assoc();
      if($row['man_pass']===$pass)
      {
        $_SESSION['user']=$user;
        $msg="success";
        $loc="/Blood_Donation_system/manager/About_you_manager.php";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='$loc';
        </script>";
      }
    }

    $msg="invalid password";
    $loc="login.html";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='$loc';
    </script>";
  
  

      $con->close();
?>