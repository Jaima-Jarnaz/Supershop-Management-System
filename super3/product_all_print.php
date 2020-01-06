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
?>

<div class="print" id="printableArea"><br>
<center><h2>Product Information </h2></center>
<?php
$sql = "SELECT pid,pname,pp FROM tb_product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    echo "<center><table border='1' cellpadding='5'>";
	echo"<tr><th>Product_Id</th><th>Product_Name</th><th>Product_Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center><tr ><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["pp"]."</td></tr></center>";
    }
  echo "</table></center>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div><input type="submit" onclick="printDiv('printableArea')" value="Print" style="margin-left:47%"/></center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
