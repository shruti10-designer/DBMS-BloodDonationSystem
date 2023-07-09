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

$br_id=$_POST['br_id'];
$a_p=$_POST['a_p'];
$a_n=$_POST['a_n'];
$b_p=$_POST['b_p'];
$b_n=$_POST['b_n'];
$o_p=$_POST['o_p'];
$o_n=$_POST['o_n'];
$ab_p=$_POST['ab_p'];
$ab_n=$_POST['ab_n'];
$date=date("Y/m/d");
$user_id=$_SESSION['user'];
$sql="INSERT INTO orders(ord_date,user_id,br_id,a_p,a_n,b_p,b_n,o_p,o_n,ab_p,ab_n,status) VALUES('$date',$user_id,$br_id,$a_p,$a_n,$b_p,$b_n,$o_p,$o_n,$ab_p,$ab_n,'processing');";
$con->query($sql);

            $msg="success";
            $loc="place_order.html";
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href='$loc';
            </script>";

?>