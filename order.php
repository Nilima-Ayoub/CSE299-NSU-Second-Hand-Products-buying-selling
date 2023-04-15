<?php
include_once 'header.php';
?>


<!--property view-->
<div class="container mt-5" >

  <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center" id="productcard">
<?php
  $query = mysqli_query(
          $mysqli_connection,
          "SELECT * FROM item where id='".$_GET['id']."'");
          $RowCount = mysqli_num_rows($query); ?>


    <div class="col mt-5" style="width:300px">
  



<?php

         for ($i = 0; $i < $RowCount; ++$i) {
             $row = mysqli_fetch_array($query); ?>
             <a href="product_details.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-black"><div class="col">
                  <div class="card">
                  <img src="img/<?php echo $row['img1']; ?>" class="card-img-top img_size" alt="..." loading="lazy" >

                    <div class="card-body">
                      <h6 class="card-title"><?php echo $row['title']; ?> </h6>
                      <p class="card-text">Price: <?php echo $row['price']; ?> Tk</p>
                    </div>
                </div>
                </div> </a>
            </div>
  
         


    
  <div class="col"style="width:400px">
  <form method="post" action="item_query.php">




<div class="form-outline mb-4">
<div class="col">
    <h4>Please fill up the details to get delivery of the product:</h4>
    <label for="payment" class="mb-1">Name:</label>

<input type="text" class="form-control text-center " required id="name" name="name" value="">
</div>

<div class="form-outline mb-4">
  <div class="col">
  <label for="phone number" class="mb-1">Contact number:</label>

<input  type="number" class="form-control text-center" required id="phone_number" name="phone_number"  value="">
</div>
  </div>
  <div class="form-outline mb-4">
  <div class="col">
  <label for="phone number" class="mb-1">Mail address:</label>

<input  type="mail" class="form-control text-center" id="mail" name="mail" value="">
</div>
  </div> 
  <div class="form-outline mb-4">
  <div class="col">
  <label for="phone number" class="mb-1">Shipping address:</label>

<textarea class="form-control" rows="2" required id="address" name="address"></textarea>
</div>
  </div>
  

<input  type="hidden" class="form-control text-center"  name="user_id" value="<?php echo $row['user_id']; ?>">
<input  type="hidden" class="form-control text-center"  name="title" value="<?php echo $row['title']; ?>">
<input  type="hidden" class="form-control text-center"  name="sub_category" value="<?php echo $row['sub_category']; ?>">
<input  type="hidden" class="form-control text-center"  name="price" value="<?php echo $row['price']; ?>">

  <?php
         }
           ?>         
  <div class="form-outline mb-4">

<div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-light pay" onclick='return confirm_order()' name="order_details">Confirm</button></div>
                  </form>
  </div>

</div>
</div>        
</div>
        </div>
  <?php include 'footer.php'; ?>
  <script>
  function confirm_order(){
    return confirm('Thank you for Purchasing.For cancelling the order please contact to the seller.');
  }
  </script>