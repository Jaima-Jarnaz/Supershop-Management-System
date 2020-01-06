<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'db_product');
$sql="DELETE FROM tb_product WHERE pid='$_GET[pid]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=view.php");
else 
     echo"not deleted";
?>