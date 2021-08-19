<?php
session_start();
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }
function patient_login()
{
    include '../../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM patient_registration WHERE username='$username' AND password='$password' ";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        $id=$row['patient_id'];
        if($count==1)
        {
            $_SESSION['username']= $username;
	        $_SESSION['id']=$id;
           
            // echo "<script> alert('Login Successful');</script>";
            echo "
                <script>
                M.toast({html: 'Login successfull!'});
            
                </script>
             ";

            echo "<script>document.location='../home.php?id=$id'</script>";
            

        }
        else
        {

            echo "
                <script>
                M.toast({html: 'wrong username/password'});
            
                </script>
             ";
            // echo "<script> alert('wrong username/password');</script>";
           // echo "<script>document.location='./login.php'</script>";
            
        }
    }

}

function call_nurse()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id=$_SESSION['id'];
        $reason=$_POST['reason'];
        if($reason=="others")
        $reason=$_POST['otherreason'];
        $sql="INSERT INTO call_nurse(reason,patient_id,Category) VALUES('$reason','$id','Nurse')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
                <script>
                M.toast({html: 'Reason added Successful', classes: 'rounded'});
            
                </script>
            ";
       // echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
            //exit; 
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
      //  echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
        }
    }

}
function call_doctor()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id=$_SESSION['id'];
        $reason=$_POST['reason'];
        if($reason=="others")
        $reason=$_POST['otherreason'];
        $sql="INSERT INTO call_nurse(reason,patient_id,Category) VALUES('$reason','$id','Doctor')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
            <script>
            M.toast({html: 'Reason added Successfully', classes: 'rounded'});
        
            </script>
        ";
       // echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
      
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
       // echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
            
        }
    }

}
function call_manager()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id=$_SESSION['id'];
        $reason=$_POST['reason'];
        if($reason=="others")
        $reason=$_POST['otherreason'];
        $sql="INSERT INTO call_nurse(reason,patient_id,Category) VALUES('$reason','$id','Manager')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
                <script>
                M.toast({html: 'Reason added Successful', classes: 'rounded'});
            
                </script>
            ";
       // echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
            exit; 
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
      //  echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
        }
    }

}
function call_dietition()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id=$_SESSION['id'];
        $reason=$_POST['reason'];
        if($reason=="others")
        $reason=$_POST['otherreason'];
        $sql="INSERT INTO call_nurse(reason,patient_id,Category) VALUES('$reason','$id','Dietition')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
                <script>
                M.toast({html: 'Reason added Successful', classes: 'rounded'});
            
                </script>
            ";
       // echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
            exit; 
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
      //  echo "<script>document.location='../views/call_nurse.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
        }
    }

}
function water()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_SESSION['id'];
    $type=$_POST['group1'];
    $quantity=$_POST['quantity'];
    $sql="INSERT INTO  (reason,patient_id) VALUES('$reason','$id')";
    $result=mysqli_query($con,$sql);
    }
}

function housekeeping()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_SESSION['id'];
    $reason=$_POST['reason'];
        if($reason=="others")
        $reason=$_POST['otherreason'];
        $sql="INSERT INTO house_keeping(alloted_item,patient_id) VALUES('$reason','$id')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
                <script>
                M.toast({html: 'Reason added Successful', classes: 'rounded'});
            
                </script>
            ";
     //   echo "<script>document.location='../views/housekeeping.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
            exit; 
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
       // echo "<script>document.location='../views/housekeeping.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
        }
    }
}

function wifi()
{
    include '../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
        $id=$_SESSION['id'];
        $devices=$_POST['reason'];
        $req_id=generateRandomString();
        $sql="INSERT INTO wifi(req_id,num_of_devices,patient_id) VALUES('$req_id','$devices','$id')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "
                <script>
                M.toast({html: 'Reason added Successful', classes: 'rounded'});
            
                </script>
            ";
            //echo "<script>document.location='../views/wifi.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
             
        }
        else{
            echo "
            <script>
            M.toast({html: 'Reason added unSuccessful', classes: 'rounded'});
        
            </script>
        ";
       // echo "<script>document.location='../views/wifi.php?id=$id'</script>";
            // echo "<script> alert('un Successful');</script>";
        }

}
}

function orders($item_id)
{
    include '../../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   {   

   
      $order_id=generateRandomString();
      $id=$_SESSION['id'];
      $sql="select * from menu where ID='$item_id'";
      $result=mysqli_query($con,$sql);
      while($row=mysqli_fetch_array($result))
      {
    
      $quantity=$_POST['quantity'];
      $price=$row['Price'];
      }

      
      $sql1="INSERT INTO  orders(order_id,patient_id,item_id,quantity,total_price) VALUES('$order_id','$id','$item_id',$quantity','$price')";
      $result1=mysqli_query($con,$sql1);
      echo $id;
      if($result1)
            {
                echo "
                <script>
                M.toast({html: 'Ordered Successfully', classes: 'rounded'});
            
                </script>
            ";
      //  echo "<script>document.location='../orderfood/shakhari.php?id=$id'</script>";
                  
            // echo "<script> alert('Reason added Successful');</script>";
            // echo "<script>document.location='call_nurse.php?id=$id'</script>"; 
            exit; 
        }
        else{
            echo "
            <script>
            M.toast({html: 'order unSuccessful', classes: 'rounded'});
        
            </script>
        ";
        // echo "<script>document.location='../shakhari.php'</script>";
            // echo "<script> alert('un Successful');</script>";
            exit; 
        }
      
  
    
   
}
   
}
?>