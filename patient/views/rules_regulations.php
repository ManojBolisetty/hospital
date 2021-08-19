<?php include_once('./function.php');?>
<?php include('./header/header.php');?>
<style>
    <?php include_once('./rules_regulations.css');
    ?>
    <?php include('./header/navbar.css');?>
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
     </script>   
<body>
<?php include('./header/navbar.php');
$id=$_SESSION['id'];
?>

<div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='black'/%3E%3C/svg%3E&#34;); background-color: white;" aria-label="breadcrumb">
  <ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="./home.php?id=<?php echo "$id"?>">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Rules&Regulations</li>
  </ol>
</div>
<div class="container mt-5  div-center">
<h5 class="card-title text-center mb-3"><b>Rules and Regulations</b></h5>
  <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Rule 1</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.wertyuiop;lkjhgfd.fghgnfk 'nvr  fnf;saldjyeshtegusejdthejujfhejtufhskhrrkhfkhhdgjhg</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Rule 2</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet..dfngljhtlofgknuhffgkb gh; hg; thg hhgh;ha;hgbhhgithg'atheheterwthsjrhepwtheterjthejabntuid.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Rule 3</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.tsedrftghjkjmhngbfvctgvhnmdfglktkkfmdcflvnvngelgtfbna;nqwertyuioplkjhgfdsazxcvbnmm</span></div>
    </li>
  </ul>
</div>
</body>