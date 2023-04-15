<?php
include_once 'header.php';
include_once 'post_add.php';
?>


    <div class="container mt-5 ms-0">
    <div class="row">
            <div class="col-1 col-md-3">
            <?php
include_once 'side_navbar.php'; ?>   

</div>
<div class="col ms-4 ">

<div class="row row-cols-1 row-cols-md-2">
  <?php
  if (isset($_POST['submit'])) {
      $title = $_POST['titlename'];
      $description = $_POST['description'];
      $category = $_POST['category'];
      $sub_category = $_POST['sub-category'];
      $price = $_POST['price'];
      $duration_of_use = $_POST['duration_of_use'];
      $img1 = $_POST['img1'];
      $img2 = $_POST['img2'];
      $name = $_POST['name'];
      $mail = $_POST['email'];
      $phonenumber = $_POST['phonenumber']; ?>
      <div class="card mx-auto  ms-4" >
      <div class="card-body">

<form method="post" action="item_query.php">
<input type="hidden" class="form-control" required id="titlename" name="titlename"  value=<?php echo  $title; ?> >
</div>

  <input type="hidden" class="form-control" rows="1" required id="description" name="description" value= <?php echo $description; ?>></textarea>



  <input type="hidden" class="category form-control" required id="category" name="category" value="<?php echo  $category; ?>">
    
<div class="col">
<input type="hidden" class="form-control " required id="sub-category" name="sub-category" value="<?php echo $sub_category; ?>">


<input  type="hidden" class="form-control" required id="price" name="price" min="1" value="<?php echo $price; ?>">
<input  type="hidden" class="form-control" required id="duration_of_use" name="duration_of_use" value="<?php echo $duration_of_use; ?>">


   
<input  type="hidden"   name="img1"  id="img1" value="<?php echo $img1; ?>">

<input  type="hidden"   name="img2"  id="img2" value="<?php echo $img2; ?>">

                      <input type="hidden" class="form-control" required id="name" name="name" value="<?php echo $name; ?>">

                      <input type="hidden" class="form-control" required id="email"  name="email"value="<?php echo $mail; ?>">
                    
                    <input  type="hidden" class="form-control" required id="phn" name="phonenumber"value="<?php echo $phonenumber; ?>">
<div class="form-outline mb-4 ms-5">
<div class="col">
<img src="../project/img/bkash.png"  alt="...">

  </div>
</div>

<div class="d-flex justify-content-center">
<a herf="about.php">www.nitto.com</a>
  </div>



<div class="form-outline mb-4">
<div class="col">
  <?php
  $price = $price * 0.05;
      if ($price < 10) {
          $price = 10;
      } ?>
    <label for="payment" class="mb-1">Payment:</label>

<input type="number" class="form-control text-center " required id="payment" name="payment" value="<?php echo $price; ?>" readonly>
</div>
</div>

<div class="form-outline mb-4">
  <div class="col">
  <label for="phone number" class="mb-1">Bkash account number :</label>

<input  type="text" class="form-control text-center" required id="phone_number" name="phone_number"  value="<?php echo $phonenumber; ?>">
</div>
  </div>          
  <div class="form-outline mb-4">

<div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-light pay" name="submit_after_payment">Proceed</button></div>
                  </form>
                </div>
  </div>
           
</div>
</div>
    </div>
</div>
</div>
    <?php
  }
include_once 'footer.php';
?>
