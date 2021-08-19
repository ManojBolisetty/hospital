<?php include_once('../function.php');?>
<?php admin_login(); ?>
<?php include('../header/header.php');?>
<style>
    <?php include_once('./login.css');
    ?>
      <?php include('../header/navbar.css');?>
</style>



<body >
    <?php include_once('../header/navbar.php');?>
    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
        <ol class="breadcrumb" style="color: black">
            <li class="breadcrumb-item"><a href="../../../index.html">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Login</li>
        </ol>
    </div>
    <div class="div_center">
        <form action="" method="POST">
            <div class="container1 ">

                <div class="card ">
                    <h5 class="card-title text-center mb-3">Admin Login</h5>

                    <div class="row m-0">
                         <div class="input-field col s12">
                             <input id="username" type="text" class="validate" name="username">
                            <label for="username">Username</label>
                         </div>
                    </div>
                        <div class="row m-0">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password">
                                <label for="password">Password</label>
                             </div>  
                        </div>
                                <div class="text-center  ">
                                     <button class="btn waves-effect waves-light login_btn" type="submit" name="action">Login
                                                             <!-- <i class="material-icons right">send</i> -->
                                     </button>
                                </div>
                </div>
             </div>
        </form>
    </div>
</body>
