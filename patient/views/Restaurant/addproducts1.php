<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta http-equiv="refresh" content="5">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="orderfood.css">
</head>
<body>
	<center>
	<div class="size"  style=" overflow-y: scroll; overflow-x: hidden;">

	<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
    <div class="row">
      <div class="col-1">
    <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="adminpanel.php">Home</a>
  </li>
</ul>
</div>
<div class="col">
    <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="addproducts.php">Back</a>
  </li>
</ul>
</div>
</div>
    <h1><center>Add New product</h1><b>
    	<div class="row d-flex justify-content-center ">
    <div class="col-8">
     
      <div class="input-group input">
          <span class="input-group-text">product ID</span>
         <input type="text" class="form-control " name="pid" placeholder =" product id ">
      </div>
    </div>
  </div>
  <br>
  <div class="row d-flex justify-content-center ">
    <div class="col-8">
     
      <div class="input-group input">
          <span class="input-group-text">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <input type="text" class="form-control " name="title" placeholder ="Title of product ">
      </div>
    </div>
  </div>
  <br>
  <div class="row d-flex justify-content-center">
    <div class="col-8">
      <div class="input-group input">
          <span class="input-group-text">Description</span>
         <textarea  rows="5" class="form-control" name="description" placeholder ="Enter the Description of "></textarea>
      </div>
    </div>
  </div>
<br>
  <div class="row d-flex justify-content-center ">
    <div class="col-8">
     
      <div class="input-group input">
          <span class="input-group-text">Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <input type="text" class="form-control " name="price" placeholder ="enter price ">
      </div>
    </div>
  </div>
  <br>
  <div class="row d-flex justify-content-center ">
    <div class="col-8">
     
      <div class="input-group input">
          <span class="input-group-text">Image path</span>
         <input type="text" class="form-control " name="img" placeholder ="enter image path ">
      </div>
    </div>
  </div>
  <br>
  <div class="row d-flex justify-content-center ">
    <div class="col-8">
     
      <div class="input-group input">
  <label for="cars">Choose category:</label>
<select id="category" name="category">
  <option value="Shakhari">Shakhari</option>
  <option value="Mansahari">Mansahari</option>
  <option value="Healthy selection">Healthy selection</option>
  <option value="Stockpot">Stockpot</option>
  <option value="Munchies">Munchies</option>
  <option value="GlobeTrotting">GlobeTrotting</option>
   <option value="Beverages">Beverages</option>
</select>
</div>
    </div>
  </div>
<br>
  <div class=" d-flex justify-content-center">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
  
</form>

</div>
 
</center>

<script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>



<?php
		
		
		
		
		$conn=new mysqli("localhost","root","","restaurant");
			$title=$_POST['title'];
			$description=$_POST['description'];	
			$price=$_POST['price'];
			$img=$_POST['img'];
			$category=$_POST['category'];
			$pid=$_POST['pid'];
 
							
		if($conn->connect_error)
		{
			die('connection failed:'.$conn->connect_error);
		}
		else
		{	
			$stmt=$conn->prepare("insert into menu(ID,Title,Description,Price,img,Category) values(?,?,?,?,?,?)");
			$stmt->bind_param("ssssss",$pid,$title,$description,$price,$img,$category);
			$stmt->execute();
			$stmt->close();
			$conn->close();
			

			
			
		
	}

		

?>

</body>
</html>