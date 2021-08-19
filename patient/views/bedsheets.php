<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./bedsheets.css');
    ?>
    <?php include('./header/navbar.css');?>
</style>
<body>
<?php include('./header/navbar.php');
$id=$_SESSION['id'];
?>
<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="./home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Bedsheets Linens,gowns</li>
  </ol>
</div>
<div class="container">
<h5 class="card-title text-center mb-3"><b>Bedsheets Linens,gowns</b></h5><br>
    
  		<div class="card">
          <div class="row">
  			<div class="col m9 l6">
      			<img src="../assets/images/doctor.jpg" class="imgh">
      		</div>
      		<div class="col m4 l4">
	      		
	        		<p class="description">hello </p>
	      	
	      	</div>
              <div class="col m2  l2">
		                     <p >30/-</p>
		                     </div>
		     <div class="col m2 l2">
		                     	Quantity<br>
		        <input type="number" name="quantity" value="1">
		    </div >
		        <div class="col m2 l3" >
		    <input type="submit" name="submit" placeholder="Order" class="btn btn-primary" value="Order">
		    </div>
</div>
      	</div>
	</div>  

</body> 