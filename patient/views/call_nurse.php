<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<?php call_nurse(); ?>
<style>
    <?php include_once('./call_nurse.css');
    ?>
    <?php include('./header/navbar.css');?>
</style>
<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('otherreason');
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 

<body>
<?php include('./header/navbar.php');
$id=$_SESSION['id'];
?>
<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="./home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Call Nurse</li>
  </ol>
</div>
<form action="" method="POST" >
        <div class="container1 div_center">
          <div class="card">
                <h5 class="card-title text-center mb-3"><b>Call Nurse</b></h5>
                <div class="row m-0">
                
                    <div class="input-field col s12">
                          <select name="reason" class="browser-default" onchange='CheckColors(this.value);'> 
                            <option>Select Reason to call nurse</option>  
                            <option value="red">RED</option>
                            <option value="blue">BLUE</option>
                            <option value="others">others</option>
                          </select>
                        <br> 
                        <input type="text" class="text-center validate" name="otherreason" id="otherreason" style='display:none;'  placeholder="type your reason here"/>
                        
                    </div>
                </div>


 <div  class="mx-auto text-center"> <button type="submit" name="op" class="btn btn-primary">Submit</button></div>
 </div>
</div>
</form>
</body>
</html>