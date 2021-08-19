<?php
session_start();
session_destroy();
$_SESSION['out']='Logged out successfully..!';
header("Location:../../index.html");
?>