<?php
 $con = mysqli_connect('localhost','root','','lab-project final');
if($con)
echo 'connected';
$sql = "INSERT INTO `book`( `typeNameX` ,	 `typeEmailX`	,`typeDateX` 	,`typeAddressX` 	,`typeSeatX`	) VALUES ('test', 'test','test', 'test', 'test')";

$rs= mysqli_query($con, $sql);
