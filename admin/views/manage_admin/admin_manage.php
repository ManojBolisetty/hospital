<?php include('../header/header.php');?>
<style>
    <?php include_once('./admin_manage.css');
    ?>
      <?php include('../header/navbar.css');?>
</style>

<body>
    <?php include_once('../header/navbar.php');?>
   <div class="container mt-5">
   <table class="responsive-table highlight  centered bordered">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Admin_Id</th>
                <th>Admin_Name</th>
                <th>Access_for</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>Eclair</td>
                <td>Eclair</td>
                <td>
                <a class="waves-effect waves-light btn "><i class="material-icons left">edit</i>Edit</a> 
                <a class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>Delete</a>

                </td>
               
            </tr>
            <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>Eclair</td>
                <td>Eclair</td>
                <td>
                <a class="waves-effect waves-light btn "><i class="material-icons left">edit</i>Edit</a> 
                <a class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>Delete</a>

                </td>
               
            </tr>

        </tbody>
    </table>
   </div>

</body>