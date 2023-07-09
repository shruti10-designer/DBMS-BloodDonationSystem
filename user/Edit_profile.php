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

$phno=$_POST['phno'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$k=0;
if($phno!='')
{
$sql="UPDATE users SET user_phn=$phno WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
if($pin!='')
{
$sql="UPDATE users SET user_pin=$pin WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
if($address!='')
{
$sql="UPDATE users SET user_address='$address' WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
if($city!='')
{
$sql="UPDATE users SET user_city='$city' WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
if($state!='')
{
$sql="UPDATE users SET user_state='$state' WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
if($pass1!=''){
if($pass1==$pass2)
{
$sql="UPDATE users SET user_pass='$pass1' WHERE user_id=".$_SESSION['user'].";";
$con->query($sql);
$k=1;
}
else
{
    $msg="password unmatch";
    $loc="Edit_profile.html";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='$loc';
    </script>";
}
}

if($k==1)
{
    $msg="Updated";
    $loc="Edit_profile.html";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='$loc';
    </script>";
}
else{
    $msg="Enter something to update";
    $loc="Edit_profile.html";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='$loc';
    </script>";
}
?>