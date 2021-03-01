<?php
  include("includes/head.php");
  if($_SESSION['login_user']!='admin')
  {
  	header('location:../index.php');
  }
  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <p>This is a dashboard</p>
        </div>
        <!-- /.container-fluid -->

<?php
  include("includes/foot.php");
  ?>
