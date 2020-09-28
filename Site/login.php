<?php 
include("connect.php");
$email=$_POST['email']; 
$phone=$_POST['phone'];
$pass=$_POST['pass']; 

$tbl_name="users";
$email = stripslashes($email);
$pass = stripslashes($pass);
$phone=stripslashes($phone);
$wmail = mysql_real_escape_string($email);
$pass = mysql_real_escape_string($pass);
$phone = mysql_real_escape_string($phone);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$pass'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){

    
    $query = "SELECT * FROM employees WHERE email LIKE '%{$email}%'";

    

    $details = mysql_query($query);

    $row = mysql_fetch_array($details);
       

    
    
	$home="home.php";
	$userid=$row['id'];
	$usertype=$rows['usertype'];
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['userid'] = $userid;
    $_SESSION['usertype'] =$usertype;

    header("Location:$home");
};
?>