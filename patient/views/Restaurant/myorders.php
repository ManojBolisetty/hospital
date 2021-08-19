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
<div class="size" style="overflow-y: scroll; overflow-x: hidden" >
  <nav class="navbar">
  <div class="container-fluid">
    <h1 >My orders.!</h1>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

	
    <ul class="nav nav-pills">
     <li class="nav-item justify-content-end">
      <a class="nav-link active " href="index.php">Home</a>
      </li>
    </ul>
	<br>
	<table   class="table-bordered  table-striped table-hover">
  <tr>
    <th height='40' width="300">
      <font color="red"><center><b>Order ID</font>
    </th>
    <th height="40" width="300">
      <font color="red"><center><b>Order</font>
    </th>
    <th height="40" width="300">
      <font color="red"><center><b>Price</font>
    </th>
    <th height="40" width="300">
      <font color="red"><center><b>Total price</font>
    </th>
    <th height="40" width="300">
      <font color="red"><center><b>Status</font>
    </th>
    <th height="40" width="150"><center>
     <font color="red"> <center><b>Action</font>
    </th>
  </tr>

<?php
	$conn=mysqli_connect("localhost","root","");
$db= mysqli_select_db($conn,'Restaurant');

		$query="select * from orders ";
		$query_run=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($query_run))
			{
			
				?>

				<form method="POST" action="myorders.php?id=<?php echo $row["OID"]; ?>">
        
        <tr>
          <td  width="300" height="60" >
            <center><?php echo $row['ID'];?></center>

          </td>
           <td  width="300" height="60" >
            <?php echo  "<b><center> ".$row['Title']."<br>"; 
            
          ?>
      </td>
               <td  width="300" height="60" >
               <center> 	<?php
              
              echo $row['Quantity'].'*'.(int)$row['Price'];
             ?>
         </td>

              <td  width="300" height="60" >
               <center> 	<?php
              
              echo 'Rs '.$row['Quantity']*(int)$row['Price'].'/-';
             ?>
         </td>
      <td  width="300" height="60" >
               <center> 	<?php
              
               echo $row['status'];
             ?>
         </td>
            
          <td><center>
          	<?php

          	if ( $row['status']=="pending") {
          		?>
          		 <input type="submit" name="cancel" value="cancel" class='btn btn-primary'>
          		 <?php
          	}

          		else 
          		{}
          			if($row['status']=="completed")
          			{
          				?>
          				<input type="submit" name="feedback" value="feedback" class='btn btn-primary'>
          				<?php
          			}
          			else
          			{

          			}
          	?>
         
          
 
     </td>
 </tr>
 
    </form> 

<?php
}
?>



</div>
</div>


 </table>

</center>
</body>
</html>



<?php
if(isset($_POST['cancel']))

        {

        $id=$_GET['id'];           
        $query="delete from orders where OID='$id'; ";
       
         
        $query_run=mysqli_query($conn,$query);
        echo '<script> alert("your order is canceled") </script>' ;

                      
                    }
if(isset($_POST['feedback']))
{
	
}
?>


  