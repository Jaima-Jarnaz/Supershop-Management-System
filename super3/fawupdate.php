<?php
require("view.php");
$id =$_REQUEST['pid'];

$result = mysql_query("SELECT * FROM tb_product WHERE pid='$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$name=$test['pname'] ;
				$id= $test['pid'] ;					
				$department=$test['pp'] ;

if(isset($_POST['save']))
{	
	$name_save = $_POST['pname'];
	$id_save = $_POST['pid'];
	$department_save = $_POST['pp'];

	mysql_query("UPDATE tb_product SET  pname ='$name_save',pid='$id_save',pp ='$department_save' WHERE pid = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: againup.php");			
}
mysql_close($conn);
?>
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
<form method="post">
<table>
	
	<tr>
		<th>name:</th>
		<td><input type="text" name="pname" value="<?php echo $name ?>"/></td>
	</tr>
	<tr>
		<th> id:</th>
		<td><input type="digits" name="pid" value="<?php echo $id ?>"/></td>
	</tr>
	<tr>
		<th>price:</th>
		<td><input type="text" name="pp" value="<?php echo $department ?>"/></td>
	</tr>
	
	<tr>
	<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><a href="main.html">HOME</a></td>
	</tr>
</table>
</form>
<button type="button" onclick="location.href='http://localhost/rg/main.php'">Back</button>

</body>
</html>
 