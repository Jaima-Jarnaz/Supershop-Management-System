<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_product');
$sql="DELETE FROM tb_employee WHERE eid='$_GET[eid]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=empv.php");
else 
     echo"not deleted";
?>