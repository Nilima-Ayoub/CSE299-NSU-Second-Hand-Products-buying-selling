<?php
include_once 'header.php';
if (isset($_SESSION['role'])) {?>

<!--navbar-->
<div class="container ms-0 mt-4">
            <div class="row">
            <div class="col-1 col-md-3">
            <?php
include_once 'side_navbar.php';
?>   
</div> 

<div class="col ms-4 ">

<div class="row row-cols-1 row-cols-md-2">
<?php
  $query = mysqli_query(
          $mysqli_connection,
          "SELECT * FROM item where id='".$_GET['id']."'");
          $RowCount = mysqli_num_rows($query); ?>
<?php for ($i = 0; $i < $RowCount; ++$i) {
              $row = mysqli_fetch_array($query); ?>


    <div class="col">
  <div class="card" style="border:transparent;">

<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/<?php echo $row['img1']; ?>"  class="img-fluid rounded-start" alt="..." style="width:560px; height:450px;" >
   
    </div>
    <div class="carousel-item">
    <img src="img/<?php echo $row['img2']; ?>" class="img-fluid rounded-start" alt="..." style="width:560px; height:450px;">
      
    </div> 

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

</div>
    
  </div>
  <div class="col mt-5">
  <h5 class="card-title mb-3">Product details</h5>
                      <p class="card-text">Title: <?php echo $row['title']; ?></p>
                      <p class="card-text">Description: <?php echo $row['description']; ?></p>
                       <p class="card-text">Category: <?php echo $row['category']; ?></p>
                       <p class="card-text">Sub-category: <?php echo $row['sub_category']; ?></p>
                       <p class="card-text">Price: <?php echo $row['price']; ?>Tk</p>
                       <p class="card-text">Email:  <?php echo $row['email']; ?></p>
                       <p class="card-text">Phone Number: 0<?php echo $row['phone_number']; ?></p>
                       <?php if (isset($_SESSION['username']) && ($_SESSION['role'] == 'admin')) { ?>
                         <a href="item_delete.php?id=<?php echo $row['id']; ?>&amp;user_id=<?php echo $row['user_id']; ?>" onclick='return checkdelete()' class="btn btn-outline-secondary text-black ms-4" ><i class="fa-solid fa-trash"></i> Delete</a> 
                         <?php
  
  } else{?>
    <a href="item_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-secondary text-black" ><i class="fa-regular fa-pen-to-square"></i> Edit</a>             
    <a href="item_delete.php?id=<?php echo $row['id']; ?>" onclick='return checkdelete()' class="btn btn-outline-secondary text-black ms-4" ><i class="fa-solid fa-trash"></i> Delete</a>
 <?php  }} ?>
</div>
  </div>
  </div>
</div>
  </div>
 
<script src="check_delete.js"></script>

<?php
    include_once 'footer.php'; }?>
