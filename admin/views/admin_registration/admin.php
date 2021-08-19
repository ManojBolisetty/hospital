
<?php include_once('../header/header.php');?>
<style>
    <?php include_once('admin.css');
    ?>
    <?php include('../header/navbar.css');?>
</style>
<?php include_once('../function.php');?>
<?php admin_registration();
    
?>


<script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

</script>




<body >
<?php include_once('../header/navbar.php');?>

    <form action="" method="POST">
        <div class="container1 div_center ">

            <div class="card ">
                <h5 class="card-title text-center mb-3">Admin Registration</h5>

                <div class="row m-0">
                    <div class="input-field col s12">
                        <input id="username" type="text" class="validate" name="username">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate"name="password" >
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="input-field col s12">
                        <input id="firstname" type="text" class="validate" name="firstname">
                        <label for="firstname">Firstname</label>
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
                        <input id="mobile" type="text" class="validate" name="mobile">
                        <label for="mobile">Mobile</label>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="input-field col s12">
                        <input id="designation" type="text" class="validate" name="designation">
                        <label for="designation">Designation</label>
                    </div>
                </div>
                <div class="row m-0">
                
                    <div class="input-field col s12">
                            <select multiple name="access_for[]">
                                    <option value="call_nurse">call nurse</option>
                                    <option value="call_doctor">call doctor</option>
                                    <option value="call_manager">call manager</option>
                                    </select>
                            <label>Access for</label>
                    </div>
                </div>

                <div class="text-center  ">
                <button class="btn waves-effect waves-light login_btn" type="submit" name="action">Register
                    <!-- <i class="material-icons right">send</i> -->
                </button>
                </div>
            </div>
        </div>
    </form>
</body>



