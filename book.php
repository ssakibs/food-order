<?php session_start(); ?>
<?php
 require_once 'db.php';

 
$typeEmailX=$_POST['typeEmailX'];
$typeNumberX=$_POST['typeNumberX'];
$typeAddressX=$_POST['typeAddressX'];
$typeQuantityX=$_POST['typeQuantityX'];

$sql = "INSERT INTO `book`( 	 `typeEmailX`	,`typeNumberX` 	,`typeAddressX` 	,`typeQuantityX`	) VALUES ( '$typeEmailX','$typeNumberX', '$typeAddressX', '$typeQuantityX')";

$rs= mysqli_query($con, $sql);

if($rs)
{
    echo "your order placed successfully";

     
}                      


?>
