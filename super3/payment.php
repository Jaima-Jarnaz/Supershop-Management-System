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
				 <li class="coral"><a href="payment.php">Payment</a></li>
				
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
            <li><a class="homeblack" href="report.php">REPORT</a></li>
        </ul>
    </nav>
    </header>
	<div class="footer">
	
	<h3>Devoloped by Jaima Jarnaz</h3>
</div>
<header><div class="nav">
</header>

	<br><br>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_product";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$Payment_Id = $_POST['Payment_Id'];
$Product_Id = $_POST['PID'];
$Payment_Method = $_POST['Payment_Method'];
$Total_Amount = $_POST['Total_Amount'];

$sql = "INSERT INTO payment( Payment_Id,PID,Payment_Method,Total_Amount) VALUES('$Payment_Id','$Product_Id','$Payment_Method','$Total_Amount')";
// $Id, $Method, $Amount
if ($conn->query($sql) === TRUE) 
{
	echo "Your Information Saved successfully";
} else {
    if ($Payment_Id == "" || $Product_Id =="" ||  $Payment_Method == "" || $Total_Amount == "") 
	{
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>
<center><h2><font color="purple"><u>Payment Information </u></font></h2></center>
<center>
<form action="Payment.php" method="post">
<br>
<font size="+2" color="005b7a" style="font-family:verdana;">
<table>
<tr>
<td>Customer Id:</td>
<td><input type="text"  name="Payment_Id"  required></td>
</tr>
<tr>
<td>Product Id:</td>
<td><input type="text"  name="PID"  required></td>
</tr>
<tr>
<td>Product Quantity:</td>
<td><input type="text"  name="pq"  required></td>
</tr>
<tr>
<td>Payment Method:</td>
<td><input type="text"  name="Payment_Method"></td>
</tr>
<tr>
<td>Total Amount:</td>
<td><input type="text"  name="Total_Amount"></td>
</tr>

</table>
</font>
<br><br>
<input type="submit" value="Submit"> <input type="Reset" value="Reset">
</form>
</font>
</font>
</center><br><br><br>
</body>
</html>