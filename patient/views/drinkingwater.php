<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./drinkingwater.css');
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
    <li class="breadcrumb-item" aria-current="page">Call Drinking Water</li>
  </ol>
</div>
<form action="" method="POST" >
        <div class="container1 div_center ">

            <div class="card">
                <h5 class="card-title text-center mb-3"><b>Drinking Water</b></h5>
                <div class="row m-0 fon">
                    <div class="col-6">
                <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span>Hot Water</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span>Normal Water</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio"  />
                        <span>Cold Water</span>
                    </label>
                </p>
                </div>
                <div class=col-3>
                    <input type="number" name="quantity" placeholder="Quantity">
                </div>
                </div>
                
      
      


 <div  class="mx-auto text-center"> <button type="submit" name="op" class="btn btn-primary">order</button></div>
 </div>
</div>
</form>
</body>
</html>