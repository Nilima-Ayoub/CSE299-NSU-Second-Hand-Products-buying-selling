<?php
include_once 'header.php';
if (isset($_SESSION['username']) && ($_SESSION['role'] == 'user')) {?>


    <div class="container mt-5 ms-0">
    <div class="row">
            <div class="col-1 col-md-3">
            <?php
include_once 'side_navbar.php'; ?>   

</div>
<div class="col ms-4 ">

<div class="row row-cols-1 row-cols-md-2">
  <?php
$sql = "SELECT *FROM item WHERE id='".$_GET['id']."'";
$sql_run = mysqli_query($mysqli_connection, $sql);
if (mysqli_query($mysqli_connection, $sql)) {
    $row = mysqli_fetch_array($sql_run); ?>
      <div class="card mx-auto  ms-4" >
      <div class="card-body">

<div class=" mb-4 ">
<form method="post" action="item_query.php">
<label for="titlename">Title: </label>
<input class="form-control" required id="titlename" name="titlename"  value="<?php echo $row['title']; ?>">
</div>
<div class="form-outline mb-4">
<div class="col">
  <label for="description">Description</label>
  <input class="form-control" rows="1" required id="description" name="description" value="<?php echo $row['description']; ?>"></textarea>
</div>
</div>

<div class="form-outline mb-4">
<div class="row">
<div class="col">
  <label for="Category">Category:</label>
  <select class="category form-control" required id="category" name="category" value="<?php echo $row['category']; ?>">
    <option>Books</option>
    <option>electronics</option>
    <option>Toys</option>
    <option>furniture</option>
    <option>Musical instruments</option>
    <option>Clothes</option>
</select>
</div>
<div class="col">
<label for="sub-category">Sub Category</label>
<input class="form-control " required id="sub-category" name="sub-category" value="<?php echo $row['sub_category']; ?>">
</div>
</div>
</div>

<div class="form-outline mb-4">
<div class="row">
  <div class="col">
<label for="price">Price (TK):</label>
<input  type="number" class="form-control" required id="price" name="price" min="1" value="<?php echo $row['price']; ?>">
</div>
<div class="col">
<label for="duration">Duration of use</label>
<input  type="text" class="form-control" required id="duration_of_use" name="duration_of_use" value="<?php echo $row['duration_of_use']; ?>">
</div>
</div></div>

<div class="form-outline mb-4">Upload images of front and back parts of your goods</div>
<div class="form-outline mb-4 ">

    <div class="row">
    <div class="col">
<input  type="file"  accept="image/*" name="img1"  id="img1" value="<?php echo $row['img1']; ?>">
</div>
<div class="col">
<input  type="file"  accept="image/*" name="img2"  id="img2" value="<?php echo $row['img2']; ?>">
</div>

</div>
</div>
<div class="form-outline mb-4"><h4>Contact information</h4></div>
<div class="form-outline mb-4">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" required id="name" name="name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-outline mb-4">

                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" required id="email"  name="email"value="<?php echo $row['email']; ?>">
                    </div>
                    
                    <div class="form-outline mb-4">
                    <label for="phn">Phone Number:</label>
                    <input  type="number" class="form-control" required id="phn" name="phonenumber"value="<?php echo $row['phone_number']; ?>">
                    </div>
                    <input type="hidden" name="item_id" id="item_id"  value="<?php echo $row['id']; ?>">

<div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-light pay" name="submit_change">Proceed</button></div>
                  </form>
                </div>
           
</div>
</div>
    </div>
</div>
</div>
    <?php
}}
include_once 'footer.php';
?>
