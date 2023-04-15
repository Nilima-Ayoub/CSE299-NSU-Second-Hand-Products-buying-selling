<table class="table table-striped table-hover table-bordered mt-4 text-center">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email address</th>
<th>Phone number</th>
<th>View Posts</th>
<th>Delete user</th>
</tr>
</thead>

<tbody>

<?php   

for ($i = 0; $i < $rowcount; ++$i) {
$row = mysqli_fetch_array($query); ?>

<tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email_address']; ?></td>
          <td>0<?php echo $row['phone_number']; ?></td>
          <td>Total: <?php echo $row['totalPost'];?>  <a href="seller_post_view_foradmin.php?user_id=<?php echo $row['id']; ?>" class="link">(view)</a></td>
       <td><a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick='return checkdelete()' class="text-decoration-none" >❌</a></td>

</tr>

    <?php
}
?>
</tbody>
</table>