<?php include_once('./function.php');?>
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
    <li class="breadcrumb-item" aria-current="page">Bedsheets</li>
  </ol>
</div>
<div class="container mt-5">
<h5 class="card-title text-center mb-3"><b>Bedsheets</b></h5>
<table class="highlight centered responsive-table bordered">
        <thead>
          <tr>
              
              <th>Patient ID</th>
              <th>Order ID</th>
              <th>Item Name</th>
              <th>Item ID</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Order Status</th>
              <th>Action</th>
              
             
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>12345</td>
            <td>D1234</td>
            <td>cotton blanket</td>
            <td>I124ATM</td>
            <td>2</td>
            <td>250</td>
            <td>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Pending</option>
                  <option value="2">Completed</option>
                  <option value="3">Accepted</option>
                </select>
              </div>
            </td>
            <td><input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;"></td>
          </tr>
          <tr>
          <td>23456</td>
          
            <td>D2345</td>
            <td>white blanket</td>
            <td>I34A23</td>
            <td>1</td>
            <td>150</td>
            <td>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Pending</option>
                  <option value="2">Completed</option>
                  <option value="3">Accepted</option>
                </select>
              </div>
            </td>
            <td><input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;"></td>
          </tr>
          <tr>
          <td></td>
            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
            </td>
            <td>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Pending</option>
                  <option value="2">Completed</option>
                  <option value="3">Accepted</option>
                </select>
              </div>
            </td>
            <td><input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;"></td>
          </tr>
          <tr>
          <td></td>  
            
            <td> </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
            </td>
            <td>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Pending</option>
                  <option value="2">Completed</option>
                  <option value="3">Accepted</option>
                </select>
              </div>
            </td>
            <td><input type="submit" name="submit"  class="btn btn-primary" value="update" style="margin-top: 10px;"></td>
          </tr>
          <tr>
          <td></td>
       
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
            </td>
            <td></td>
          </tr>
          <tr>
          <td></td>
            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
            </td>
            <td></td>
          </tr>
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