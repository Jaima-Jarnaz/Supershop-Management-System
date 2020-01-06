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
		.search-box-wrapper {
    display: inline-flex;
    font-size: 20px;
}

.search-box-input {
    font-size: inherit;
    border: 0.2em solid #7e7;
    border-radius: 0.5em 0 0 0.5em;
    padding: 0.2em 0.5em;
    outline: 0;
}

.search-box-input:hover,
.search-box-input:focus {
    border-color: #99ccff;
}

.search-box-button {
    font-size: inherit;
    border: 0.2em solid #7e7;
    border-radius: 0 0.5em 0.5em 0;
    background-color:#99ccff;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
}

.search-box-button:hover,
.search-box-button:focus {
    border-color: #4d4;
    background-color: #99ccff;
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
  <div class="container">
      <div class="col-lg-9" style="float: left;">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_product";
		$product="tb_product";
		$id="pid";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * 
        FROM tb_product
        WHERE tb_product.pid ='$_POST[pid]'";
        $result = mysqli_query($conn,$sql);
		$chalo="select * from $product";
		$chalok=mysqli_query($conn,$chalo);
        ?>
		    <center>
            <tr>
			<br>
			<h1>Product Info</h1>
			<br>
            <table style='width:500px; margin:auto; color:black; padding:10px;' border='5' bgcolor='white'>
			</tr>
            <?php
            while ($accused=mysqli_fetch_assoc($result))
          {
			  
                  echo "<tr>";
                  echo"<th>Product ID: </th>";
                  echo"<td>".$accused['pid']."</td>";
                  echo"</tr>";
                  echo"<tr>";
                  echo"<th>Product Name: </th>";
                  echo"<td>".$accused['pname']."</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo"<th>Product Price: </th>";
                  echo"<td>".$accused['pp']."</td>";
                  echo "</tr>";
          }
          ?>
        </table>
		 </center>
      </div>
	  <center>
      <div class="form-style-8 col-lg-3 bbw" style="margin-top: 2%;">
            <h1>Search For Product</h1><br>
				  	<form action="prosearch.php" method="POST">
						<select name="pid" >
							<option>Select Product ID</option>
							<?php
								if($chalok)
								{
									while($row=mysqli_fetch_array($chalok))
									{
										$product_id=$row["$id"];
										echo "<option>$product_id<br></option>";
									}
								}
							?>
						  </select>
						<input type="submit" value="Search">
				  	</form>
        </div>
		</center>
    </div>  
</body>
</html>