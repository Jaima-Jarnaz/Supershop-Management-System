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
<center><h2>Customer Information</h2></center>
<?php
$sql = "SELECT cid,cname,cc FROM tb_customer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    echo "<center><table border='1' cellpadding='5'>";
	echo"<tr><th>Customer_Id</th><th>Customer_Name</th><th>Customer_Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center><tr ><td>".$row["cid"]."</td><td>".$row["cname"]."</td><td>".$row["cc"]."</td></tr></center>";
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
