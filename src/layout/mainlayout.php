<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php require '../components/head.php' ;?>
<!-- head -->

<body>
  <!-- LOADER -->
  <?php require '../components/loader.php' ;?>
  <!-- LOADER -->

  <div class="page-container">
    <!-- header -->
    <div class="page-header">
      <?php include '../components/topbar.php';?>
    </div>
    <!-- sidebar -->
    <div class="page-sidebar">
      <?php include '../components/sidebar.php' ;?>
    </div>
    <div class="page-content">
      <div class="main-wrapper">
        <?= $content ?? '';?>
      </div>
    </div>
    <!-- Javascripts -->
    <?php require '../components/js.php';?>
</body>

</html>