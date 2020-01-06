<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Shawpno Supershop Management System</title>
    <style>
        *{
            margin: 0;
        }
        
        body{
            background-image: url(6.jpg);
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
            height: 35px;
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
		.button {
  background-color: #b366ff;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
				<li class="coral"><a href="payment1.php">Payment</a></li>
                </ul>
            </li>
            <li><a class="homeblack" href="#">VIEW</a>
			<ul>
                <li class="coral"><a href="view.php">View Product</a></li>
                <li class="coral"><a href="cusv.php">View Customer</a></li>
                <li class="coral"><a href="empv.php">View Employee</a></li>
				<li class="coral"><a href="paymentview.php">View Payment</a></li>
             </ul>
			</li>
            <li><a class="homeblack" href="#">SEARCH</a>
			<ul>
                 <li class="coral"><a href="1stpageprosearch.php">Product Info</a></li>
                <li class="coral"><a href="1stcustomersearch.php">Customer Info</a></li>
                <li class="coral"><a href="1stemployeesearch.php">Employee Info</a></li>
                </ul>
			</li>
            <li><a class="homeblack" href="report2.php">REPORT</a></li>
        </ul>
    </nav>
    </header>
	<div class="footer">
	
	<h3>Devoloped by Jaima Jarnaz</h3>
</div>


<header><div class="nav">
</header>


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
	  echo "<br><br>";
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
	  echo "<br><br>";
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
?>  <br><br><br><br><br><br><br>
<div style="text-align: center;">
<a href="employee_all_print.php" class="button">All Print</a>
<a href="main.html" class="button">Back</a>
</div>
</table>
</body>
</html>