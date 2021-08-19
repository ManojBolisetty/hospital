<?php 
session_start();
function admin_registration()
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
        $id=$_SESSION['id'];
        $admin_id=generateRandomString();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $designation=$_POST['designation'];
       
        $date=date('Y-m-d');
        //  $access_for=array();
         $access_for = implode(',', $_POST['access_for']);
        echo $access_for;
        
        $sql="INSERT INTO admins_registration(admin_id,username,password,first_name,last_name,access_type,access_for,mobile,email,Designation,last_updated,created_date,sa_id) VALUES('$admin_id','$username','$password','$firstname','$lastname','admin','$access_for','$mobile','$email','$designation','$date','$date','$id')";
        echo $sql;
        return 0;
        if(mysqli_query($con,$sql))
        {
            // echo "<script> alert('admin Registration Successful');</script>";
            echo "
            <script>
            M.toast({html: 'Admin Added Successfull', classes: 'rounded'});
        
            </script>
         ";
            echo "<script>document.location='admin.php?id=$id'</script>";
            exit;
    
        }
        else{
            echo "
            <script>
            M.toast({html: '$con->error', classes: 'rounded'});
        
            </script>
         ";
            
                echo "Error: "  . $con->error;
              
        }
    }
}
function superadmin_login()
{

   
    include'../../config/dbcon.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM superadmin WHERE username='$username' AND password='$password'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        $id=$row['sa_id'];
        if($count==1)
        {
            $_SESSION['username']= $username;
	        $_SESSION['id']=$id;
            
            // echo "<script> alert('Login Successful');</script>";
            echo "
                <script>
                M.toast({html: 'Login successfull!', classes: 'rounded'});
            
                </script>
             ";
            echo "<script>document.location='../index.php?id=$id'</script>";
            exit;

        }
        else
        {   
            // echo "<script> alert('wrong username/password');</script>";
            echo "
                <script>
                M.toast({html: 'Invalid Credentials', classes: 'rounded'});
            
                </script>
             ";
            // echo "<script>document.location='./login.php'</script>";
        }
    }

}



?>