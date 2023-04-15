<?php
include_once 'header.php';
if (isset($_SESSION['username']) && $_SESSION['role'] == 'user') {
    ?>

   <!--navbar-->
   <div class="container ms-0 mt-4">

<div class="row">
<div class="col-1">
            <?php  include_once 'side_navbar.php'; ?>  
</div>

<div class="col ms-4 mt-3">
<div class="d-flex flex-column">



<div class="row" id="admin_search_result">
<?php
$user_id = $_SESSION['id'];

    $query = mysqli_query(
    $mysqli_connection,
    "SELECT * FROM order_details where seller_id='$user_id'");
    $rowcount = mysqli_num_rows($query);
    if ($rowcount > 0) {?>
        <table class="table table-striped table-hover table-bordered mt-4 text-center">
<thead>
<tr>
<th>Name</th>
<th>Email address</th>
<th>Phone number</th>
<th>Sipping address</th>
<th>Title</th>
<th>Category</th>
<th>Price</th>

<th>Order date</th>

<th>Delete</th>
</tr>
</thead>

<tbody>

<?php

for ($i = 0; $i < $rowcount; ++$i) {
    $row = mysqli_fetch_array($query); ?>

<tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['mail']; ?></td>
          <td>0<?php echo $row['contact_number']; ?></td>
          <td><?php echo $row['shipping_address']; ?></td>

          <td><?php echo $row['item']; ?></td>
          <td><?php echo $row['sub_category']; ?></td>
          <td><?php echo $row['price']; ?></td>

          <td><?php echo $row['date']; ?></td>


       <td><a href="order_delete.php?id=<?php echo $row['order_id']; ?>" onclick='return checkdelete()' class="text-decoration-none" >❌</a></td>

</tr>

    <?php
}
?>
</tbody>
</table>
  <?php  } ?>
</div>
</div>
</div></div></div>




<?php  include_once 'footer.php';
} ?>
<script src="check_delete.js"></script>