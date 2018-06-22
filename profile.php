<!DOCTYPE html>
<html lang="en">
<?php
  include 'functions.php';

  include 'views/partials/head.php';
?>
  <body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
  <?php
    include 'views/partials/header.php';
    include 'views/partials/aside.php';?>
    <div class="page-wrapper">
  <?php
    include 'views/pages/profile.php';
    include 'views/partials/sidebar.php';
  ?>

    </div>
  <?php
    include 'views/partials/footer.php';
    include 'views/partials/scripts.php';
  ?>
   </div>
  </body>
</html>
