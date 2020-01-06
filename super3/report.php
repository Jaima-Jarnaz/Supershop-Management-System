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
<h1 align=center><b>Shawpno Supershop</b></h1>
<h3 align=center><b>Address:Rajlokkhi,Uttora</b></h3>
<br>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_product";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT cid,pname,pp,Total_Amount,ename
FROM ((tb_product LEFT OUTER JOIN tb_customer ON tb_product.pid=tb_customer.PID)
LEFT OUTER JOIN payment ON tb_product.pid=payment.PID
LEFT OUTER JOIN tb_employee ON tb_product.pid=tb_employee.PID)';






//$sql = 'SELECT 	member.Member_ID,member.Member_Name, member.Member_Address, member.Member_Contact,Program.Program_Name,Payment.Payment_Method,Payment.Total_Amount
   //FROM ((member INNER JOIN Program ON member.Member_ID = Program.Program_No)
              //INNER JOIN Payment ON member.Member_ID = Payment.Payment_Id)';

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo "<center>";
    echo "<table align=center border=1 ><tr>
	<th>Customer Id</th><th>Product Name</th>
	<th>Product Price</th>
	<th>Total_Amount</th>
	<th>Employee Name</th></tr>";
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["cid"]."</td>
		<td>".$row["pname"]."</td>
		<td>".$row["pp"]."</td>
		<td>".$row["Total_Amount"]."</td>
		<td>".$row["ename"]."</td>";
		echo "</tr>";
    }
    echo "</table>";
	echo "</center>";
}
else {
    echo "0 results";
}


mysqli_close($conn);
?>
<br> <br>
</body>
</html>