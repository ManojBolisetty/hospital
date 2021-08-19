<?php include_once('./function.php');?>

<?php include('./header/header.php');?>
<?php wifi();?>
<style>
    <?php include_once('./wifi.css');
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
    <li class="breadcrumb-item" aria-current="page">Wifi</li>
  </ol>
</div>
<form action="" method="POST" >
        <div class="container1 div_center">
          <div class="card">
                <h5 class="card-title text-center mb-3"><b>WIFI REQUEST</b></h5>
                <div class="row m-0">
                
                    <div class="input-field col s12">
                          <select name="reason" class="browser-default" > 
                            <option>Select No of Devices to connect</option>  
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        <br>  
                       
                    </div>
                </div>
<div  class="mx-auto text-center"> <button type="submit" name="op" class="btn btn-primary">Submit Request</button></div>
 </div>
</div>
</form>
</body>
