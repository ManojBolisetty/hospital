<?php include_once('./function.php');?>
<?php include_once('../config/dbcon.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./call_doctor.css');
    ?>
    <?php include('./header/navbar.css');?>

</style>

<body>


<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="./home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">House Keeping</li>
  </ol>
</div>
<div class="container mt-5">
<h5 class="card-title text-center mb-3"><b>House Keeping</b></h5>
<table class="highlight centered responsive-table bordered">
        <thead>
          <tr>
              <th>Sno</th>
              <th>Service</th>
              <th>Room No & Bed No</th>
              <th>Patient ID</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
              
             
          </tr>
        </thead>

        <tbody>
          <?php
          $sno=1;
          $query="select * from house_keeping JOIN patient_registration ";
          $query_run=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($query_run))
			    {
          
          ?>
          <tr>
              <td><?php echo $sno?></td>
              
            <td><?php echo $row['service_type']?></td>
            <td><?php echo $row['room_no']."-".$row['bed_no']?></td>
            <td><?php echo $row['patient_id']?></td>
            <td><?php echo $row['date']?></td>
            <td>
            <form method='POST' action="house_keeping.php?action=submit&id=<?php echo $row["id"]; ?>">
            <div class="input-field col s12">
                <select name="status">
                  <option value=<?php echo $row['status'];?>  selected><?php if($row['status']===NULL){
                    echo "Choose Your option";
                  } 
                  else{
                    echo $row['status'];
                  }?></option>
                  <option value="Pending">Pending</option>
                  <option value="Completed">Completed</option>
                  <option value="Accepted">Accepted</option>
                </select>
              </div>
            </td>
            <td><input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;"></td>
            </form>
          </tr>
         <?php
         $sno+=1;
         }
         ?>
        </tbody>
      </table>
</div>
<script>
   $(document).ready(function(){
    $('select').formSelect();
  });
</script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$status=$_POST['status'];
  $id=$_GET['id'];
	$query1="UPDATE house_keeping SET status ='$status' WHERE id='$id'" ;	

	$query_runn=mysqli_query($con,$query1);
  if($query_runn)
            {
                echo "
                <script>
                M.toast({html: 'status updation Successful', classes: 'rounded'});
            
                </script>
            ";
          }
          else
          {
            
            echo "
            <script>
            M.toast({html: 'status updation  not Successful', classes: 'rounded'});
        
            </script>
        ";
          }
}

?>