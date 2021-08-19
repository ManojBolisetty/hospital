<?php include('../header/header.php');?>
<style>
    <?php include_once('./patient.css');
    ?>
      <?php include('../header/navbar.css');?>
</style>
<?php include_once('../function.php');?>
<?php patient_registration();
?>
<body>
<?php include_once('../header/navbar.php');?>
 
<form action="" method="POST"  enctype="multipart/form-data">
<div class="container1 div_center">
<div class="card">
<h5 class="card-title text-center mb-3">Patient Login</h5>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="username" type="text" class="validate" name="username">
          <label for="username">username</label>
    </div>
</div>
  
<div class="row m-0">
   <div class="input-field col s12">
      <input id="password" type="password" class="validate" name="password">
          <label for="password">password</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="firstname" type="text" class="validate" name="firstname">
          <label for="firsntname">Firstname</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="lastname" type="text" class="validate" name="lastname">
          <label for="lastname">Lastname</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="gender" type="text" class="validate" name="gender">
          <label for="gender">Gender</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="age" type="text" class="validate" name="age">
          <label for="age">Age</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="mobile" type="text" class="validate" name="mobile">
          <label for="mobile">Mobile Number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="email" type="text" class="validate" name="email">
          <label for="email">Email Id</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="address" type="text" class="validate" name="address">
          <label for="email">Address</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="blood" type="text" class="validate" name="blood">
          <label for="email">Blood Group</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="admission_no" type="text" class="validate" name="admission_no">
          <label for="admission_no">Admission number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="room" type="text" class="validate" name="room">
          <label for="room">Room Number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="bed" type="text" class="validate" name="bed">
          <label for="bed">Bed Number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="ip" type="text" class="validate" name="ip">
          <label for="ip">IP Number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="uhid" type="text" class="validate" name="uhid">
          <label for="uhid">UHID Number</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="doc" type="text" class="validate" name="doc">
          <label for="doc">Doctor Assigned</label>
    </div>
</div>
<div class="row m-0">
   <div class="input-field col s12">
      <input id="nurse" type="text" class="validate" name="nurse">
          <label for="nurse">Nurse Assigned</label>
    </div>
</div>
<div class="row m-0">
<label for="email">Upload Image of Patient</label>
   <div class="input-field col s12">
  
      <input id="image" type="file" class="validate" name="image">
         
    </div>
</div>
 
 <div  class="mx-auto text-center"> <button type="submit" name="op" class="btn waves-effect waves-light login_btn">Submit</button></div>
 </div>
</div>
</form>
</body>
