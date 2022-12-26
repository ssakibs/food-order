<?php 

session_start(); 

require_once 'db.php';

$typeEmailX=$_POST['typeEmailX'];
$typePasswordX=$_POST['typePasswordX'];

$sql = "SELECT * FROM `connection` WHERE `typeEmailX` = '$typeEmailX' AND `typePasswordX` = '$typePasswordX'";

$rs= mysqli_query($con, $sql);

if(mysqli_num_rows($rs) > 0)
{
	$_SESSION['logged_in'] = true;
    echo "Logged in. Redirecting Please wait...";
    header('Refresh: 0.1 ; URL= mainindex.html');

}else{
	echo "Invalid User Password Entered";
}
