<!DOCTYPE html>
<html>
<head>
<title>OVERVIEW</title>
<style>
table{
     border: 4px solid black;
	 height:auto;
	 width:auto;
	 color:red;
	 bgcolor:#399EBC;
	 font-size:30px;
}
th
{
	border: 3px solid #25A5DE;
	 height:auto;
	 width:auto;
	 color:black;
	 bgcolor:#399EBC;
	 font-size:30px;
	
	
}
td
{
	border: 3px solid #25A5DE;
	 height:auto;
	 width:auto;
	 color:red;
	 bgcolor:#399EBC;
	 font-size:30px;
}
</style>
</head>

<body>
<form method="post" action="">
<table>
	<tr>
		<th> pname:</th>
		<td><input type="text" name="pname" value=""></td>
	</tr>
	<tr>
		<th>pid:</th>
		<td><input type="text" name="pid" value=""></td>
	</tr>
	<tr>
		<th>price:</th>
		<td><input type="text" name="pp" value=""></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	 <td><input type="submit" name="submit" value="submit" value=""></td>
		
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><a href="main.html">HOME</a></td>
	</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_product";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}
$pname = $_POST['pname'];
$pid = $_POST['pid'];
$pp= $_POST['pp'];

$sql = "UPDATE tb_product SET pid='$pid', pname='$pname',pp='$pp' where pid = '.$pid.'";
// $ID, $Name, $Address, $Contact
if ($conn->query($sql) === TRUE) {
    echo "<h2 align=center> Your Information Update successfully</h2>";
} else {
    if ($pname== "" || $pid== "" || $pp== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>
<button type="button" onclick="location.href='http://localhost/super3/main.html'">Back</button>

</body>
</html>
 