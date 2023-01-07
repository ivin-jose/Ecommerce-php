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
<title>Admin</title>
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
<div class="col-lg-6" style="margin-top: 80px; margin-left: 200px;">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn btn-primary main_theme space" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Admin
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_admin.php" method="POST">
        <input type="text" placeholder="email" name="email" value="" class="form-control space">
        <input type="password" name="password" placeholder="Password" value="" class="form-control space">
        <input type="text" name="type" value="admin" class="form-control space">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary main_theme">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>
    <div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Type</th>
      <th scope="col">More</th>
    </tr>
  </thead>

  <?php
  $stmt2 = $mysqli->prepare("SELECT id, email, password, type FROM login");
  $stmt2->bind_result($id, $email, $password, $type);
  $stmt2->execute();
  while ($stmt2->fetch()) {
    echo '
    <tbody>
    <tr>
      <th scope="row">'. $id .'</th>
      <td>'. $email .'</td>
      <td>'. hash('sha256', $password) .'</td>
      <td>'. $type .'</td>
      <td> <a style="color: blue;" href="delete_admin.php?id='. $id .'">Remove</a> </td>
    </tr>
  </tbody>
    ';
  }
  ?>

</table>
    </div>
</div>
</div>


</main>
</body>