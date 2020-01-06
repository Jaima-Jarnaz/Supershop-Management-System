<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_product');
$sql="DELETE FROM payment WHERE payid='$_GET[payid]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=paymentview.php");
else 
     echo"not deleted";
?>