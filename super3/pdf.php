<?php
require("view.php");
$id =$_REQUEST['pid'];

$result = mysql_query("SELECT * FROM tb_product WHERE pid= '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['pid'] ;
				$name= $test['pname'] ;					
				$price=$test['pp'] ;
				

if(isset($_POST['save']))
{	
	$id_save = $_POST['pid'];
	$name_save = $_POST['pname'];
	$price_save = $_POST['pp'];

	mysql_query("UPDATE tb_product SET pid='$id_save', pname ='$name_save',pp ='$price_save' WHERE pid= '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: pdf.php");			
}
mysql_close($conn);
?><!DOCTYPE html>
<html>
<head>
<title style="font-size:20px;"> student Database </title>
<link type="text/css" rel="stylesheet"href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style>
table, th, td {
     border: 1px solid green;
	 height:40px;
	 width:1300px;
	 text-align:center;
}
th {
    background-color:#FC3;
    color: black;
}
</style>

</head>

<body>

<h1> Student DATABASE MANAGEMENT </h1>
<div class="nav">
  <ul>
    <li><a href="http://localhost/rg/main.php">Home</a></li>
    <li><a href="form2.php">Student</a></li>
	<li><a href="http://localhost/rg/del.php">Student List</a></li>
	<li><a href="http://localhost/rg/form3.php">Search student</a></li>
	<li><a href="http://localhost/rg/report.php">Report</a></li>
  </ul>
<div id="printableArea">
<h2 style="color:black;background:blue; text-align:center;"><td> student Data</h2>
<div style="overflow-x:auto;">
<table border="2" align="center" style="margin:30px;">
<tr><th>ID</th><th> Name</th><th>price</th>
	<tr>
		
		<td><?php echo $id ?></td>
		<td><?php echo $name ?></td>
		<td><?php echo $price ?></td>
	
	</tr>
		
</table>
</div>
<div class="footer">
© Developed By Id:16103394 Name:Md Amiruzzaman Bin Ali </div></div>
<br><h3 align="center">Print the Data page </h3><center><input type="button" onclick="printDiv('printableArea')" value="Print Data!" /></center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
</body>
</html>
