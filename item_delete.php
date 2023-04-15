<?php session_start();
include_once 'connection.php';

$sql = "DELETE FROM item WHERE id='".$_GET['id']."'";
$user_id=$_GET['user_id'];

if (mysqli_query($mysqli_connection, $sql)) {
    
    if (isset($_SESSION['username']) && ($_SESSION['role'] == 'admin')) {

        //if admin deletes then total post update of user
        $itemPost = mysqli_query(
            $mysqli_connection,
            "SELECT * FROM item where user_id='$user_id'");
            $RowCount = mysqli_num_rows($itemPost);

        $query3 = "UPDATE user_info SET totalPost='$RowCount' WHERE id='$user_id'";
        $profile_edit = mysqli_query($mysqli_connection, $query3);
      header('location:admin_dashboard.php');
    }
     else {
        include_once 'item_query.php';
        header('location:seller_dashboard.php');
    }
} else {
    echo 'Error deleting record: '.mysqli_error($mysqli_connection);
}