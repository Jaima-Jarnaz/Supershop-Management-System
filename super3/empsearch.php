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
    border-color: #4d4;
}

.search-box-button {
    font-size: inherit;
    border: 0.2em solid #7e7;
    border-radius: 0 0.5em 0.5em 0;
    background-color: #7e7;
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
    background-color: #4d4;
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
		
		.form-style-8{
    font-family: 'Armata';
    width: 300px;
    padding: 30px;
    background: #FFFFFF;
    margin: 80px auto;
    /*margin-top: 10%;*/
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}

.a88{
	width:600px!important;
}
.form-style-8 h2{
    background: #4D4D4D;
    /*text-transform: uppercase;*/
    text-align: center;
    font-family: 'Armata';
    color: #fff;
    font-size: 25px;
    font-weight: 100;
    padding: 16px;
    margin: -30px -30px 25px -30px;
}
.a88 input[type="text"],
.a88 input[type="date"],
.a88 input[type="datetime"],
.a88 input[type="email"],
.a88 input[type="number"],
.a88 input[type="search"],
.a88 input[type="time"],
.a88 input[type="url"],
.a88 input[type="password"],
.a88 textarea,
.a88 select {
	width: 45%!important;
	float: left!important;
	    margin-left: 25px;
}

.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px 'Armata';
    height: 30px;
}
::placeholder {
    color: #000;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: #000;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: #000;
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Armata';
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #4D4D4D 5%, #4D4D4D 100%);
    background-color:#4D4D4D;
}

.form-style-8 input[type="button"], 
.form-style-8 input[type="reset"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Armata';
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}

.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="reset"]:hover {
    background:linear-gradient(to bottom, #4D4D4D 5%, #4D4D4D 100%);
    background-color:#4D4D4D;
}
table {
    font-family: 'Armata';
    border-collapse: collapse;
    width: 100%;
}

th {
    border: 1px solid #000;
    text-align: right;
    padding: 5px;
}

td {
    border: 1px solid #000;
    text-align: left;
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #e8e8e8;
}
.bbw{
	margin: 80 auto;
    float: right;
}
.bbc{
	margin: 0 auto;
    margin-top:20%;
}
input:not([type=range]){
    width: 100%;
}
.opore {
    margin-top: 10%;
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
		$employee="tb_employee";
		$id="eid";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * 
          FROM tb_employee
          WHERE tb_employee.eid = '$_POST[eid]'";
        $result = mysqli_query($conn,$sql);
		$chalo="select * from $employee";
		  $chalok=mysqli_query($conn,$chalo);
        ?>
		 <center>
            <tr>
			<br>
			<h1>Employee Info</h1>
			<br>
            <table style='width:300px; margin:auto; color:black; padding:10px;' border='5' bgcolor='white'>
			</tr>
            <?php
            while ($accused=mysqli_fetch_assoc($result))
          {

                  echo "<tr>";
                  echo"<th>Employee ID: </th>";
                  echo"<td>".$accused['eid']."</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo"<th>Employee Name: </th>";
                  echo"<td>".$accused['ename']."</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo"<th>Contact: </th>";
                  echo"<td>".$accused['ec']."</td>";
                  echo "</tr>";
          }
          ?>
        </table>
		</center>
      </div>
      <div class="form-style-8 col-lg-3 bbw" style="margin-top: 2%;">
            <h2>Search For Employee</h2>
				  	<form action="empsearch.php" method="POST">
						<select name="eid" >
							<option>Select Employee ID</option>
							<?php
								if($chalok)
								{
									while($row=mysqli_fetch_array($chalok))
									{
										$emp_id=$row["$id"];
										echo "<option>$emp_id<br></option>";
									}
								}
							?>
						  </select>
						<input type="submit" value="Search">
				  	</form>
        </div>
    </div> 
</body>
</html>