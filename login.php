<!DOCTYPE html>
<html lang="en">
<?php include './functions.php' ?>
<?php include './views/partials/head.php' ?>
<?php if(check_cookie()){header('Location:./dashboard.php');}; ?>
<body>
<?php
include './views/pages/login.php';
 ?>
 <?php include './views/partials/scripts.php' ?>
 </body>
 <?php
 if($_POST['err']=1){
   echo '<script>swal("Please Login First!!"); </script>';
 }
 ?>
 </html>
