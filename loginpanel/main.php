<?php 
include_once 'db-connect.php';
include_once 'session.php';

if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
}
if ($_SESSION["type"] != 'admin') {
   header("Location: main.php");
}
?>
<body>
    <main>

    <?php
    include 'includes/header.php';
    ?>

    <div class="row">
        <div class="col-lg-6">
         <!--sidebar start-->
         <aside>
          <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
            <li class="">
              <a class="" href="main.php">
                  <i class="icon_house_alt"></i>
                  <span>Manage Admins</span>
              </a>
           </li>
          <li class="">
            <a class="" href="add_product.php">
              <i class="icon_house_alt"></i>
              <span>Products</span>
            </a>
          </li>
         </ul>
  <!-- sidebar menu end-->
</div>
</aside>
</div>
<div class="col-lg-6">
    df
</div>
</div>


</main>
</body>