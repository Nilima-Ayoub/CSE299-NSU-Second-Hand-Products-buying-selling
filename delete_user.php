<?php

include_once 'connection.php';
$sql = "DELETE FROM user_info WHERE id='".$_GET['id']."'";

if (mysqli_query($mysqli_connection, $sql)) {
    $sql2= "DELETE FROM item WHERE user_id='".$_GET['id']."'";
    (mysqli_query($mysqli_connection, $sql2));
    header('Location:admin_dashboard.php');
} else {
    echo 'Error deleting record: '.mysqli_error($mysqli_connection);
}
