<?php

session_start();
include_once 'connection.php';

$user_id = $_SESSION['id'];
// item insert
if (isset($_POST['submit_after_payment'])) {
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
    $phonenumber = $_POST['phonenumber'];
    $payment = $_POST['payment'];
    $date = date('d/m/y,l');

    $query =
          "INSERT INTO item
    values(default,'$user_id','$title','$description','$category','$sub_category','$price','$duration_of_use','$img1','$img2','$name ','$mail',' $phonenumber','$payment','$date')";

    header('location:seller_dashboard.php');

    $post = mysqli_query($mysqli_connection, $query);
}
//item edit
if (isset($_POST['submit_change'])) {
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
    $phonenumber = $_POST['phonenumber'];
    $item_id = (isset($_POST['item_id']) ? $_POST['item_id'] : '');
    if ($img1 != null && $img2 != null) {
        $query =
    "UPDATE item SET title='$title', description='$description',category='$category',sub_category='$sub_category',price='$price',duration_of_use='$duration_of_use',img1='$img1',img2='$img2',name='$name ',email='$mail',phone_number=' $phonenumber' WHERE id='$item_id'";
    } elseif ($img1 != null && $img2 == null) {
        $query =
        "UPDATE item SET title='$title', description='$description',category='$category',sub_category='$sub_category',price='$price',duration_of_use='$duration_of_use',img1='$img1',name='$name ',email='$mail',phone_number=' $phonenumber' WHERE id='$item_id'";
    } elseif ($img2 != null && $img1 == null) {
        $query =
        "UPDATE item SET title='$title', description='$description',category='$category',sub_category='$sub_category',price='$price',duration_of_use='$duration_of_use',img2='$img2',name='$name ',email='$mail',phone_number=' $phonenumber' WHERE id='$item_id'";
    } else {
        $query =
        "UPDATE item SET title='$title', description='$description',category='$category',sub_category='$sub_category',price='$price',duration_of_use='$duration_of_use',name='$name ',email='$mail',phone_number=' $phonenumber' WHERE id='$item_id'";
    }
    $post_edit = mysqli_query($mysqli_connection, $query);
    if ($post_edit) {
        header('location:seller_dashboard.php');
    } else {
        echo 'Error updating record: '.mysqli_error($mysqli_connection);
    }
}

//totalPostUpdate

//if user posts and deletes then total post update
$itemPost = mysqli_query(
    $mysqli_connection,
    "SELECT * FROM item where user_id='$user_id'");
    $RowCount = mysqli_num_rows($itemPost);

$query3 = "UPDATE user_info SET totalPost='$RowCount;' WHERE id='$user_id'";
$profile_edit = mysqli_query($mysqli_connection, $query3);

//oder details
if (isset($_POST['order_details'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $category = $_POST['sub_category'];
    $price = $_POST['price'];

    $date = date('d/m/y,l');

    $query =
          "INSERT INTO order_details
    values(default,'$name','$phone_number','$mail','$address','$user_id','$title','$category','$price','$date')";

    header('location:product_view.php');

    $post = mysqli_query($mysqli_connection, $query);
}
