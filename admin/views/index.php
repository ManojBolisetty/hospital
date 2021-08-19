<?php session_start();?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./style.css');
    ?>
      <?php include('./header/navbar.css');?>
</style>

<body>
<?php include('./header/navbar.php');?>

    <div class="container">
        <div >
            <h1 class="text-center mt-5 mb-5">Welcome Super Admin</h1>

        </div>
        <div class="row options ">
            <div class="col d-flex justify-content-center">
                <a href="./manage_admin/admin_manage.php?id=sa1">
                    <div class="card" style="width: 18rem;">
                        <i class="bi bi-person text-center h-icon"></i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Manage Admins</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="./admin_registration/admin.php?id=sa1 ">
                    <div class="card" style="width: 18rem;">
                        <i class="bi bi-person text-center h-icon"></i>
                        <div class="card-body">
                            <h5 class="card-title text-center">Create New Admin</h5>
                        </div>
                    </div>
                </a>
            </div>
          
        </div>

    </div>
</body>

