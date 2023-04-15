<?php include_once 'connection.php';

$input = $_POST['name'];
$query = mysqli_query(
    $mysqli_connection,
    "SELECT * FROM item where (title like '%{$input}%' or category like '%{$input}%' or sub_category like'%{$input}%')");
          $RowCount = mysqli_num_rows($query);

for ($i = 0; $i < $RowCount; ++$i) {
    $row = mysqli_fetch_array($query); ?>
<!--
    <ul class="search_item">
  <li> <a href="product_details.php?id=<?php echo $row['id']; ?>"><img id="header_search_pic" src="img/ <?php //echo $row['img1'];?>" width="50" height="50"/>&nbsp;
  <?php //echo $row['title'];?>-->
<div class="search_result ">
<a href="product_details.php?id=<?php echo $row['id']; ?>"><div id="" class="mb-3 search_item"><img id="header_search_pic" src="img/<?php echo $row['img1']; ?>" width="50" height="50"/>&nbsp;
<?php echo $row['title']; ?>
</div></a></div><?php
}?>