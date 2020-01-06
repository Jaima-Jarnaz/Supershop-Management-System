<?PHP
$servername="localhost";
$username="root";
$password="";
$dbname="db_product";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("error");
}
else
{
	echo"connected successfully";
}
$sql="INSERT INTO`tb_product`(`pname`,`pid`,`pp`)VALUES('$_POST[pname]','$_POST[pid]','$_POST[pp]')";
if(mysqli_query($conn,$sql))
{
	echo"1 row inserted successfully";
}
else
{
	echo"not connected";
}
mysqli_close($conn);

?>