<style>
table, th, td {
     border: 1px solid black;
	 border-collapse:collapse;
     text-align: center;
     margin: auto;
     width: 860px;
}
</style>
	<div >
		<center><h1>Hello!Search By Id For Bill Summary.</h1></center>
		<form action="" method="post">
		   <p align="center"> 
				Customer ID :<input name="cid" type="text" placeholder="Customer ID">
				<input type="submit" name='submit' value="Search"><br><br>
			</p>
		</form>		
		<center><h2><?php if(isset($success)){ echo $success; }  ?></h2></center>				
	</div>	

	<?php
			$conn =new mysqli('localhost', 'root', '', 'db_product');
			
			if(isset($_POST['submit'])){
				$id =$_REQUEST['cid'];
				
			$result = mysqli_query($conn,"SELECT * FROM tb_product  WHERE pid='$id'");
			$test = mysqli_fetch_array($result);

			$result2 = mysqli_query($conn,"SELECT * FROM tb_customer  WHERE cid='$id'");
			$test2 = mysqli_fetch_array($result2);

			$result3 = mysqli_query($conn,"SELECT * FROM tb_employee  WHERE eid='$id'");
			$test3 = mysqli_fetch_array($result3);

			$result4 = mysqli_query($conn,"SELECT * FROM payment WHERE payid='$id'");
			$test4 = mysqli_fetch_array($result4);
			?>
				<div id="printableArea">
				
				<h1 align=center><b>Shawpno Supershop</b></h1>
                <h4 align=center><b>Address:Rajlokkhi,Uttora</b></h4>
				<hr>
				<div class="table">
									<div class="bill_box">	
										<div class="client">
										<center>
											<label for="">Customer Id    :</label><?php echo $test2['cid'] ; ?><br>
											<label for="">Customer Name  :</label><?php echo $test2['cname'] ; ?><br>
											<label for="">Payment Method :</label><?php echo $test4['Payment_Method'] ; ?>
											<br>
											</center>
									</div>
									<div class="bill">
									<br>
										<table>
											<tr>
												<th>Product Id</th>
												<th>Product Name</th>
												<th>Product Quantity</th>
												<th>Product Price</th>
											</tr>
											<tr>
											<td><?php echo  $test['pid'] ; ?></td>
											<td><?php echo  $test['pname'] ; ?></td>
											<td><?php echo  $test4['pq'] ; ?></td>
									        <td><?php echo  $test['pp'] ; ?></td>
											</tr>
											<tr>
											<td>Total</td>
											<td colspan='5'>TK-<?php echo  $test['pp'] + $test['pp'] + $test['pp']  ; ?></td></tr>
										</table>
									</div>
									<div class="sign">
											   <div class="emp_sign">
											    <h4>Employee :</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
									</div>

							    
<!-- 				</table> -->
				</div>
</div>	
<div class="footer">
				<center><h3>&copy;Jaima Jarnaz (17203065)</h3></center>
		</div> 		
</div>
			<?php
			}
			?>
					                    <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print" />
										<script>
										function printDiv(divName) {
										    var printContents = document.getElementById(divName).innerHTML;
										    var originalContents = document.body.innerHTML;
										    document.body.innerHTML = printContents;
										    window.print();
										    document.body.innerHTML = originalContents;
										}</script>

										    