<?php
session_start();
function admin_login()
{
    include'../../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM admins_registration WHERE username='$username' AND password='$password' ";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        $id=$row['admin_id'];
        if($count==1)
        {
            $_SESSION['username']= $username;
	        $_SESSION['id']=$id;
            
            echo "<script> alert('Login Successful');</script>";
            echo "<script>document.location='../patient_registration/patient.php?id=$id'</script>";
            exit;

        }
        else
        {   
            echo "<script> alert('wrong username/password');</script>";
            echo "<script>document.location='./login.php'</script>";
        }
    }

}
function patient_registration()
{
    include_once('../../config/dbcon.php');
   
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        }
        $img=$_FILES['image']['name'];
        $id=$_SESSION['id'];
        $patient_id=generateRandomString();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $blood=$_POST['blood'];
        $date=date('Y-m-d');
        $admissionnumber=$_POST['admission_no'];
        $room=$_POST['room'];
        $bed=$_POST['bed'];
        $ip=$_POST['ip'];
        $uhid=$_POST['uhid'];
        $doctor=$_POST['doc'];
        $nurse=$_POST['nurse'];
        $sql="INSERT INTO patient_registration(patient_id,first_name,last_name,gender,age,mobile,email,address,blood_group,date_of_admission,admission_number,room_no,bed_no,ip_no,uhid_no,username,password,admin_id,image,doctor_assigned,nurse_assigned) VALUES('$patient_id','$firstname','$lastname','$gender','$age','$mobile','$email','$address','$blood','$date','$admissionnumber','$room','$bed','$ip','$uhid','$username','$password','$id','$img','$doctor','$nurse')";
        if(mysqli_query($con,$sql))
        {
            move_uploaded_file($_FILES['image']['tmp_name'],"../../assets/images/$img");
            // echo "<script> alert('patient  Registration Successful');</script>";
            echo "
            <script>
            M.toast({html: 'Patient Registration successfull!'});
        
            </script>
         ";
            echo "<script>document.location='../patient_registration/patient.php?id=$id'</script>";
            exit;
    
        }
        else{
            
            // echo "<script> alert('patient Registration not Successful');</script>";
            echo "
            <script>
            M.toast({html: 'Patient Registration unsuccessfull!'});
        
            </script>
         ";
            echo "<script>document.location='../patient_registration/patient.php?id=$id'</script>";
        }
    }
}
?>