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
            background-image: url(1.jpg);
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
		 body {font-family: Arial, Helvetica, sans-serif;}

form {
    border: 3px solid #f1f1f1;
    font-family: Arial;
}

.container {
    padding: 0%;
    background-color: #f1f1f1;
    box-sizing: content-box;    
    width: 500px;
    height: 150px;
    padding: 30px;    
    border: 5px black;
}




input[type=text], input[type=submit] {
    width: 100%;
    padding: 12px;
    margin: 3px 0;
    display: inline-block;
    border: 3px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    border: none;
}

input[type=submit]:hover {
    opacity: 0.8;
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
			    <li class="coral"><a href="paymentview.php">View Payment</a></li>
                </ul>
			</li>
            <li><a class="homeblack" href="#">SEARCH</a>
			<ul>
                <li class="coral"><a href="sv.php">Product Info</a></li>
                <li class="coral"><a href="search2.php">Customer Info</a></li>
                <li class="coral"><a href="search3.php">Employee Info</a></li>
                </ul>
			</li>
			  <li><a class="homeblack" href="report.php">REPORT</a></li>
        </ul>
        </ul>
    </nav>
    </header>
	<center>
<form action="payconnect.php" method="post">
  <div class="container">
    <h2>Payment Info</h2>
  </div> 
  <div class="container" style="background-color:pink">
    <input type="text" placeholder="Customer Id"      Name="payid"value="">
    <input type="text" placeholder="Product Id"       Name="PID"value="" >
	<input type="text" placeholder="Product Quantity" Name="pq"value="" >
    <input type="text" placeholder="Payment Method"   Name="paymethod"value=""> 
  </div>
  <div class="container">
    <input type="submit" value="Submit">
  </div>
</form>
</center>

	<div class="footer">
	<p>Devoloped by Jaima Jarnaz</p>
</div>
</body>
</html>