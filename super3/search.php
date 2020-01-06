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
            background-image: url(7.jpg);
            background-size: cover;
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
            <li><a class="homeblack" href="#">SEARCH</a>
			<ul>
                <li class="coral"><a href="search.php">Product Info</a></li>
                <li class="coral"><a href="search2.php">Customer Info</a></li>
                <li class="coral"><a href="search3.php">Employee Info</a></li>
                </ul>
			</li>
            <li><a class="homeblack" href="#">ABOUT</a></li>
        </ul>
    </nav>
    </header>
	<div class="footer">
	
	<h3>Devoloped by Jaima Jarnaz</h3>
</div>

<header><div class="nav">
</header>

     <style>
table, th, td {
    border: 1px solid black; text-align: center;
}
</style>
<body style="background-image:url('')">
<table style="width:100%">
  <tr style="color:blue">
    <center>
    <h1>Payment Information</h1></center>
    <th>Product name</th>
    <th>Product Id</th> 
    <th>Product Price</th>
  </tr>
  </table>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_product"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }

  $searchKeyword = $_POST["searchKeyword"]; 
  $SQL = "SELECT * FROM `tb_product` WHERE '".$searchKeyword."' IN (pname, pid, pp);";
  $result = mysqli_query($connection, $SQL);
  if (!$result || mysqli_num_rows($result) > 0) {
   
   while($row = mysqli_fetch_assoc($result)) 
   {
  echo "<tr>";
  echo"<td>".$row['pname']."</td>";
  echo"<td>".$row['pid']."</td>";
  echo"<td>".$row['pp']."</td>";
  //echo"<td>".$row['Price']."</td>";
  //echo"<td>".$row['Vat']."</td>";
  //echo"<td>".$row['Total_Cost']."</td>";
  echo "</tr>";
  }
  } 
  else 
  {
    echo "0 Result";
  }
?>

    </body>
     
</html> 
  