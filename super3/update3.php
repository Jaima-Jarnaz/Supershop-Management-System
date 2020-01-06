<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Shawpno Supershop Management System</title>
    <style>
        *{
            margin: 0;
        }
        
        body{
            background-image: url(.jpg);
			background-repeat: repeat;
            background-position: right top;
            background-attachment: fixed;
            //background-size: cover;
        }
        
        header{
            background: pink;
            color: black;
            padding: 8px 5px 8px 30px;
            height: 30px;
        }
        
        header h1{
            display: inline;
            font-family: fantasy;
            font-weight: 400;
            font-size: 32 px;
            float: left;
            margin-top: 5px;
            margin-right: 10px;
        }
        
        nav ul{
            display: inline;
            padding: 5px;
            float: left;
        }
        
        nav ul li{
            display: inline-block;
            list-style-type: none;
            color: black;
            float: left;
            width: 120px;
            height: 55px;
            line-height: 32px;
            margin-right: 10px;
            list-style: none;
        }
        
        nav ul li ul{
            display: none;
        }
        
        nav ul li:hover > ul{
            display: block;
        }
        
        .coral{
            background-color: pink;
        }
		
		.coral:hover{
			background-color: white;

		}
        
        nav ul li a{
            color: black;
            text-decoration: none;
        }
        
        .homeblack:hover{
            background-color: white;
            padding: 30px 10px 15px 10px;
        }
		.footer {
			position: fixed;
			height: 60px;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: pink;
			color: black;
			text-align: center;
			padding-left: 40%;
		}
    </style>
</head>
<body>
 <header>
    <nav>
	 <h1>Shawpno Supershop </h1>
        <ul id="nav">
            <li><a class="homeblack" href="main.html">HOME</a></li>
            <li><a class="homeblack" href="#">INSERT</a>
                <ul>
                <li class="coral"><a href="product.html">Add Product</a></li>
                <li class="coral"><a href="customer.html">Add Customer</a></li>
                <li class="coral"><a href="employe.html">Add Employee</a></li>
                </ul>
            </li>
            <li><a class="homeblack" href="#">VIEW</a>
			<ul>
                <li class="coral"><a href="view.php">View Product</a></li>
                <li class="coral"><a href="cusv.php">View Customer</a></li>
                <li class="coral"><a href="empv.php">View Employee</a></li>
                </ul>
			</li>
            <li><a class="homeblack" href="#">SEARCH</a></li>
            <li><a class="homeblack" href="#">ABOUT</a></li>
        </ul>
    </nav>
    </header>
	<div class="footer">
	
	<h3>Devoloped by Jaima Jarnaz</h3>
</div>


<header><div class="nav">
</header>
<center>
<form method="post" action="">
    <table align=center>
       <tr>
           <td>Employee Id:</td>
           <td><input type="text" name="eid" value=""></td>
       </tr>
       <tr>
           <td>Employee Name:</td>
           <td><input type="text" name="ename" value=""></td>
       </tr>
	   <tr>
           <td>Employee Contact:</td>
           <td><input type="text" name="ec" value=""></td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" name="submit" value="submit" value=""></td>
       </tr>
    </table>
</form>
</center>
</article>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_employee";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
     echo "<table style='width:600px; margin:auto; color:black; padding:5px;' border='5' bgcolor='pink'>";
      echo"<tr><th colspan='6'><h1>Employee record</h1></th></tr>";
	  echo"<tr>";
	  echo"<td><h2>Employee Name</h2></td>";
	  echo "<td><h2>Employee id</h2></td>";
      echo "<td><h2>Employee Contact</h2></td>";
	   echo "<td><h2>Delete</h2></td>";
	  echo "<td><h2>Update</h2></td>";
	  echo "<td><h2>Print</h2></td>";
	  echo "</tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>"  . $row["ename"]."</td>
		<td>"  . $row["eid"]  ."</td>
		<td>"  . $row["ec"]   ."</td>
		<td><a href =delete3.php?eid=".$row["eid"].">Delete</a></td>
		<td><a href =update3.php?eid=".$row["eid"].">Update</a></td>
		<td><a href =employee_print.php?eid=".$row["eid"].">Print</a></td>
		</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  <br><br>
<div style="text-align: center;">
    <button type="button" onclick="location.href='http://localhost/super3/empv.php'">Back</button>
</div>
</table>


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

$Program_No = $_POST['eid'];
$Program_Name = $_POST['ename'];
$Program_contact = $_POST['ec'];

$sql = "UPDATE tb_employee SET eid='$Program_No', ename='$Program_Name',ec='$Program_contact' where eid = '".$Program_No."'";
// $ID, $Name, $Address, $Contact
if ($conn->query($sql) === TRUE) {
	echo "<br><br>";
    echo "<h2 align=center> Your Information Update successfully</h2>";
} else {
    if ($Program_No== "" || $Program_Name== ""||$Program_contact=="") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

</body>
</html>
