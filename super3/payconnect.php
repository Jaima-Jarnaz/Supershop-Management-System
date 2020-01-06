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
$sql="INSERT INTO payment(payid,PID,paymethod,total_amount)VALUES('$_POST[payid]','$_POST[PID]','$_POST[paymethod]','$_POST[total_amount]')";
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