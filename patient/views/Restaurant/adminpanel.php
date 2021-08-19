<!DOCTYPE html>
<html>
<head>
	<title>Order Food</title>
	<meta http-equiv="refresh" content="5">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="orderfood.css">



</head>
<body >
	<center>
	<div class="size"  style=" overflow-y: scroll; overflow-x: hidden; "  >
		<h3 class="text-center">Orders</h3>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="adminpanel.php" id="defaultOpen">orders</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="addproducts.php">Product</a>
  </li>
 
</ul>	

<?php
	$conn=mysqli_connect("localhost","root","");
$db= mysqli_select_db($conn,'Restaurant');

		$query="select * from orders ";
		$query_run=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($query_run))
			{
			
				?>
<div class="row">
		<div class="col-12">
		<div class=" container card card-container1 d-flex  flex-row " >
			<div class="col-2">

				 <img src="<?php echo  $row['img'];?>" class="card-image1">
				</div>
		                       <div class="col-6">
		                        <h1 class="card-heading1">
		                       	<?php echo $row['Title']?>
		                        </h1> 
		                        <h6 class="card-description1">
		                       <?php echo $row['Description'] ?>
		                        </h6>
		                     </div>
		                     <div class="col-1">
		                     <p >Rs<?php echo $row['Price']?>/-</p>
		                     </div>
		                     <div class="col-1">
		                     	Quantity<br>
		                     	<?php echo $row['Quantity']?>
		                     </div >
		                     <div >
		                     	<form method="POST" action="adminpanel.php?action=submit&id=<?php echo $row["OID"]; ?> ">

							Status:<br><select name="status">
							<option value="pending">pending</option>
							<option value="processing">processing</option>
							<option value="completed">completed</option>
							
							</select><br>
							 <input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;">
							</form>
		                    
		                 </div>
		                     </div>
		</div>
</div>
</form>
<?php
}
?>



</div>
</center>
<script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>


</body>
</html>



<?php
if(isset($_POST['submit']))
{
	$id=$_GET['id'];
	

	$status=$_POST['status'];

	$query1="UPDATE orders SET status = '$status' WHERE OID='$id';" ;	
	$query_runn=mysqli_query($conn,$query1);
	 echo '<script> alert("status updated") </script>';
}
?>


  