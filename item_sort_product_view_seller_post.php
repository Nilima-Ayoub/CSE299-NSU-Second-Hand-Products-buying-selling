<?php
include_once 'header.php'; ?>

<?php include_once 'filter_option_seller_dashboard.php';
?>

<!--product view-->
<div class="container ms-0"><?php
if (isset($_SESSION['username']) && $_SESSION['role'] == 'user') {?>
  <div class="row">
<div class="col-1">

<?php
  include_once 'side_navbar.php';
?>
</div>
<div class="col ms-5">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4  g-4" id="productcard" >

<?php } else {?>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 ms-4 g-4" id="productcard" >
<?php }?>

<?php
$RowCount = mysqli_num_rows($item);
if ($RowCount == 0) {
    echo '<p class="fst-italic fs-4 text-center w-100">Sorry,item is not  avaibale.Please try a different category.</p>'; ?>  
  <?php
} else {
        for ($i = 0; $i < $RowCount; ++$i) {
            $row = mysqli_fetch_array($item); ?>
             <a href="product_details.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-black"><div class="col">
                  <div class="card">
                  <img src="img/<?php echo $row['img1']; ?>" class="card-img-top img_size" alt="..." loading="lazy">

                    <div class="card-body">
                      <h6 class="card-title"><?php echo $row['title']; ?> </h6>
                      <p class="card-text">Price: <?php echo $row['price']; ?> Tk</p>
                    </div>
                </div>
                </div> </a><?php
        }
    }?>
            </div></div></div></div>  </div>
            
  <?php include 'footer.php'; ?>
        
  

