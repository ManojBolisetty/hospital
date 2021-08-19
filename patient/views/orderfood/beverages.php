<!DOCTYPE html>
<html>
<head>
<?php include_once('../function.php');?>
<?php include_once('../../config/dbcon.php')?>
<?php include_once('../header/header.php')?>
	<style>
<?php include_once('../header/navbar.css')?>
</style>
	<title></title>
	
<link rel="stylesheet"  href="beverages.css">
</head>
<body>
<?php include_once('../header/navbar.php')?>
<?php
$id=$_SESSION['id'];
?>

<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="../home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Beverages</li>
  </ol>
</div>
<div class="row">
        <div class="col s12">
            <ul class="tabs"><b>
                <li class="tab col s2"><a href="shakhari.php">Main Course</a></li>
                <li class="tab col s2.2"><a   href="healthy.php">Healthy Selection</a></li>
                <li class="tab col s1.8 "><a   href="stockpot.php">Stockpot</a></li>
                <li class="tab col s2"><a  href="munchies.php">Munchies</a></li>
                <li class="tab col s2"><a href="globetrotting.php">Globe Trotting</a></li>
                <li class="tab col s2"><a  class="active" href="beverages.php">Beverages</a></li></b>
           
            </ul>
        </div>

      
    </div>
	
<h4><center>Beverages</h4>

<div class="container">

<?php


		$query="select * from menu where Category='Beverages'";
		$query_run=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($query_run))
			{
			
				?>
				<div class="card">
<form method="POST" action="beverages.php?action=submit&id=<?php echo $row["ID"]; ?> ">
          <div class="row">
  			<div class="col  m9 l6">
      			<img src="../../assets/images/images/<?php echo $row['img'];?>" class="imgh">
      		</div>
			  <div class="col m4 l4">
			  <h6 class="card-heading1"><b>
		                       	<?php echo $row['Title']?></b>
		                        </h6> 
      		
	      		
	        		<p class="description"> <?php echo $row['Description'] ?> </p>
	      	
	      	</div>
              <div class="col m2  l2">
			  <p >Rs<?php echo $row['Price']?>/-</p>
		                     </div>
		     <div class="col m1 l2">
		                     	Quantity<br>
		        <input type="number" name="quantity" value="1">
		    </div >
		    <div class="col m2 l2" >
		    <input type="submit" name="submit" placeholder="Order" class="btn btn-primary" value="Order">
		    </div>
		</div>
		</div>
		</form>

<?php
}
?>

</div>
</body>

</html>
<?php



if(isset($_POST['submit']))
{
	
	$order_id=generateRandomString();
  	$item_id=$_GET['id'];
	$id=$_SESSION['id'];
  	$quantity=$_POST['quantity'];
	  $sql="select * from menu where ID='$item_id'";
      $result=mysqli_query($con,$sql);
      while($row=mysqli_fetch_array($result))
      {
    
      $quantity=$_POST['quantity'];
      $price=$row['Price'];
      }
    $query1="INSERT INTO  orders(order_id,patient_id,item_id,quantity,total_price) VALUES('$order_id','$id','$item_id','$quantity','$price')";

	$query_run=mysqli_query($con,$query1);
	
	if($query_run)
	{
		echo "
		<script>
		M.toast({html: 'Ordered Successfully', classes: 'rounded'});
	
		</script>
	";
	exit;
	}
	else{
		echo "
		<script>
		M.toast({html: 'Order unSuccessfully', classes: 'rounded'});
	
		</script>
	";
	exit();
	}
}		
 
?>



