<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./today_plan.css');
    ?>
    <?php include('./header/navbar.css');?>
</style>

<body>
<?php include('./header/navbar.php');
$id=$_SESSION['id'];
?>

<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="./home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Today's Plan</li>
  </ol>
</div>
<div class="container mt-5">
<h5 class="card-title text-center mb-3"><b>Today's plan</b></h5>
<table class="highlight centered responsive-table bordered">
        <thead>
          <tr>
              <th>Sno</th>
              <th>Title</th>
             
              <th>Date</th>
              <th>Time</th>
             
          </tr>
        </thead>

        <tbody>
          <tr>
              <td>1</td>
              
            <td>blood test medical lab, 2nd floor</td>
            <td>19/7/2021</td>
            <td>9 Am</td>
            
          </tr>
          <tr>
          <td>2</td>
          
            <td>chemo therapy 1st floor</td>
            <td>19/7/2021</td>
            <td>2 pm</td>
          </tr>
          <tr>
          <td>3</td>
            
            <td>checkup room 3rd floor</td>
            <td>19/7/2021</td>
            <td>10 Am</td>
          </tr>
          <tr>
          <td>4</td>  
            
            <td> medical lab, 2nd floor</td>
            <td>19/7/2021</td>
            <td>9 Am</td>
            
          </tr>
          <tr>
          <td>5</td>
       
            <td>chemo therapy 1st floor</td>
            <td>19/7/2021</td>
            <td>2 pm</td>
          </tr>
          <tr>
          <td>6</td>
            
            <td>checkup room 3rd floor</td>
            <td>19/7/2021</td>
            <td>10 Am</td>
          </tr>
        </tbody>
      </table>
</div>
</body>
</html>