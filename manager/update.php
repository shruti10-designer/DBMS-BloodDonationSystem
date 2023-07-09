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
$val=$_POST['but'];

$ord_id=substr($val,1);
if($val[0]=='a')
{
  $sql="SELECT * FROM orders WHERE ord_id=$ord_id;";
  $result=$con->query($sql);
  $row = $result->fetch_assoc();
  $br_id=$row['br_id'];
  $a_p=$row['a_p'];
  $a_n=$row['a_n'];
  $b_p=$row['b_p'];
  $b_n=$row['b_n'];
  $o_p=$row['o_p'];
  $o_n=$row['o_n'];
  $ab_p=$row['ab_p'];
  $ab_n=$row['ab_n'];

  $sql="SELECT * FROM branch WHERE br_id=$br_id;";
  $result=$con->query($sql);
  $row = $result->fetch_assoc();
  $br_id=$row['br_id'];
  $a_p=$row['a_p']-$a_p;
  $a_n=$row['a_n']-$a_n;
  $b_p=$row['b_p']-$b_p;
  $b_n=$row['b_n']-$b_n;
  $o_p=$row['o_p']-$o_p;
  $o_n=$row['o_n']-$o_n;
  $ab_p=$row['ab_p']-$ab_p;
  $ab_n=$row['ab_n']-$ab_n;
  

  $sql="UPDATE branch SET a_p=$a_p,a_n=$a_n,b_p=$a_p,b_n=$b_n,o_p=$o_p,o_n=$o_n,ab_p=$ab_p,ab_n=$ab_n WHERE br_id=$br_id;";
    $result=$con->query($sql);

    $sql="UPDATE orders SET status='completed' WHERE ord_id=$ord_id;";
    $result=$con->query($sql);
    echo "<script type='text/javascript'>
      alert('Order accepted');
      window.location.href='Manager_new_record.php';
      </script>";
}
else{
    $sql="UPDATE orders SET status='declined' WHERE ord_id=$ord_id;";
    $result=$con->query($sql);
    echo "<script type='text/javascript'>
      alert('Order declined');
      window.location.href='Manager_new_record.php';
      </script>";
}
$con->close();

?>