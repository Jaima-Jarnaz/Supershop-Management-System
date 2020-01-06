<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_product');
$sql="DELETE FROM tb_customer WHERE cid='$_GET[cid]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=cusv.php");
else 
     echo"not deleted";
?>