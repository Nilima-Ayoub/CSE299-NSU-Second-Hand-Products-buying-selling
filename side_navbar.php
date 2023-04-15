<?php

include_once 'profile_edit_modal.php';
include_once 'post_add.php';

if (isset($_SESSION['username']) && ($_SESSION['role'] == 'admin')) {?>
<div class="side-navbar navbar-expand-lg d-flex flex-column">

<button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
<i class="fa fa-bars" aria-hidden="true"></i>
</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
<div class="offcanvas-header">
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
<div class=" d-flex flex-column flex-shrink-0 bg-light " style="width: 100px; background:white !important;">
<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
<li><a href="main.php" class="nav-link-1  py-3 border-bottom text-decoration-none"> <i class="fa fa-home"></i> <small>Home</small> </a> </li>
<li> <a href="admin_dashboard.php" class="nav-link-1 py-3 border-bottom text-decoration-none active"> <i class="fa fa-solid fa-file-lines"></i> <small>Manage Users</small> </a> </li>
<li> <a href="product_view.php" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-eye"></i> <small>See posts</small> </a> </li>
<li> <a href="#" class="nav-link-1 py-3 border-bottom text-decoration-none" data-bs-toggle="modal" data-bs-target="#new_admin_modal"> <i class="fa fa-plus-square"></i> <small>Add new admin</small> </a> </li>
<li> <a href="#" data-bs-toggle="modal" data-bs-target="#edit_profile" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-cog"></i> <small>Edit profile</small> </a> </li>
</ul>

</div>
</div>
</div>
</div>  <?php } else {?>
<div class="side-navbar sticky-top navbar-expand-lg d-flex  flex-column">
  
  <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
<div class="offcanvas-body">
<div class=" d-flex flex-column flex-shrink-0 bg-light" style="width: 100px; background:white !important;">
<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
<li><a href="main.php" class="nav-link-1  py-3 border-bottom text-decoration-none"> <i class="fa fa-house"></i> <small>Home</small> </a> </li>
<li> <a href="seller_dashboard.php" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-folder"></i><small>My post</small> </a> </li>
<li> <a href="#" data-bs-toggle="modal" data-bs-target="#edit_profile" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-cog"></i> <small>Edit profile</small> </a> </li>
<li> <a href="#" data-bs-toggle="modal" data-bs-target="#post_add" class="nav-link-1 py-3 border-bottom text-decoration-none" style="text-decoration: none;"> <i class="fa fa-plus-square"></i> <small>Post add</small> </a> </li>
<li> <a href="product_view.php" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-eye"></i> <small>See other's posts</small> </a> </li>
<li> <a href="order_detail.php" class="nav-link-1 py-3 border-bottom text-decoration-none"> <i class="fa fa-truck-ramp-box"></i> <small>Deliveries</small> </a> </li>

</ul>

</div>
</div>
  </div>
</div><?php }
?>