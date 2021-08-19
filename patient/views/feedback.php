<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./call_doctor.css');
    ?>
    <?php include('./header/navbar.css');?>
</style>

<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('otherreason');
 var reason=document.getElementById('reason');
 if(val=='others')
   {
    element.style.display='block';
    reason.style.display='none';
   }
 else 
 {
    element.style.display='none';
    reason.style.display='block';
 } 
   
}

</script> 
<script type="text/javascript">
function CheckCategory(val){
 var element=document.getElementById('otherreasons');
 if(val!='')
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
    <li class="breadcrumb-item" aria-current="page">Feedback</li>
  </ol>
</div>
<form action="" method="POST" >
        <div class="container1 div_center ">

            <div class="card">
                <h5 class="card-title text-center mb-3"><b>Feedback</b></h5>
                <div class="row m-0">
                    <div class="input-field col s12">
                          <select name="reason" class="form-control" onchange='CheckColors(this.value);'> 
                            <option>Select Category</option>  
                            <option value="HouseKeeping">House Keeping</option>
                            <option value="Repair">Repair</option>
                            <option value="Catering">Catering</option>
                            <option value="others">others</option>
                          </select>
                        <br> 
                        <div class="input-field col s12">
                              <select name="reason" id="reason" class="form-control" style="display: block;"> 
                                <option>Select Reason</option>  
                                <option value="HouseKeeping">House Keeping</option>
                                <option value="Repair">Repair</option>
                                <option value="Catering">Catering</option>
                                <option value="others">others</option>
                              </select>
                            <br> 
                        </div>

                        <input type="text" class="text-center validate" name="otherreason" id="otherreason" style='display:none;'  placeholder="type your Category here" onchange='CheckCategory(this.value);' />
                        <input type="text" class="text-center validate" name="otherreason" id="otherreasons" style='display:none;'  placeholder="type your reason here"/>
                    </div>


                    
                </div>


 <div  class="mx-auto text-center"> <button type="submit" name="op" class="btn btn-primary">Submit</button></div>
 </div>
</div>
</form>
</body>
</html>