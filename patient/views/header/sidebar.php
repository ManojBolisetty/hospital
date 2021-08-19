<?php include_once('sidebar.css');?>
<?php

$id=$_GET['id'];
$sql="SELECT * FROM patient_registration WHERE patient_id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background " style="text-align:center;">
        <img src="https://images.unsplash.com/photo-1581360742512-021d5b2157d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80">
      </div>
      <a href="#user"><img class="circle" src="../../staff/assets/images/<?php echo $row['image']; ?>"></a>
      <a href="#name"><span class="white-text name"><?php echo $row['first_name'];?></span></a>
      <a href="#email"><span class="white-text email"><?php echo $row['patient_id'];?></span></a>
    </div></li>
    <li><a href="../views/profile.php"><i class="material-icons">account_circle</i>Profile</a></li>
    <li><div class="divider"></div></li>
   
    <li><a class="waves-effect clr" href="./logout.php">Logout</a></li>


  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
     

 <script>
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
 </script>