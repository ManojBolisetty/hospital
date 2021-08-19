<?php session_start(); ?>
<?php include('./header/header.php');?>
<?php include('../config/dbcon.php');?>
<style>
    <?php include_once('./home.css');
    ?>
    <?php include('./header/sidebar.css');?>
    <?php include('./header/navbar.css');?>
</style>
<!-- <nav> navbar content here  </nav> -->

 
<body>
<?php 
$id=$_GET['id'];
$sql="SELECT * FROM patient_registration WHERE patient_id='$id'";?>
<div class="layout">
    <div class="sidebar1">
        <?php include('./header/sidebar.php');?>
    </div>
    <div class="main">
        <?php include('./header/navbar.php');?>

        <div class="div_center1">
        <br>
            <div class="row">
            <div class="col-md-3  ">
                <a href="./call_doctor.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class=" bi-person text-center h-icon"></i> -->
                       <div class="image1"> <img src="../assets/images/doctor.jpg" class="card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Call Doctor</h5>
                        </div>
                    </div>
                </a>
            </div> 
             <div class="col-md-3  ">
                <a href="./call_nurse.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/Nurse.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Call Nurse</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./call_manager.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/man.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Call Manager</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./call_dietitian.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/dietitian.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Call Dietitian</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3  ">
                <a href="./today_plan.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">   <img src="../assets/images/Todayplan.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Today's Plan</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./hospital_bill.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/Medicalbill.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hospital bills</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./orders.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">   <img src="../assets/images/Orders.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">My orders</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./orderfood/shakhari.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/Food.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Order Food</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./drinkingwater.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/Water.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Drinking water</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./bedsheets.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/Hosbed.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Bedsheets & Lenin</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./housekeeping.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/House.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">House Keeping</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./repair.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/Repair.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Repair</h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3  ">
                <a href="./rules_regulations.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/Rules.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hospital Rules & Regulations</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./handbook.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/handbook.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Patient Handbook</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./hospital_updates.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/hospital.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">hospital_updates</h5>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-md-3  ">
                <a href="./feedback.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1">  <img src="../assets/images/feedback.png" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Feedback & Complaints</h5>
                        </div>
                    </div>
                </a>
            </div>  
            <div class="col-md-3  ">
                <a href="./wifi.php?id=<?php echo "$id"?>">
                    <div class="card" style="width: 18rem;">
                        <!-- <i class="bi bi-person text-center h-icon"></i> -->
                        <div class="image1"> <img src="../assets/images/wifi.jpg" class="text-center card-image1" ></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">wifi</h5>
                        </div>
                    </div>
                </a>
            </div> 
         
            </div>
        </div>
    </div>
</div>

</body>


