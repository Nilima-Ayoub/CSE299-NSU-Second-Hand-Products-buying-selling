<?php

include_once 'connection.php';
$sql = "DELETE FROM order_details WHERE order_id='".$_GET['id']."'";

if (mysqli_query($mysqli_connection, $sql)) {
    header('Location:seller_dashboard.php');
} else {
    echo 'Error deleting record: '.mysqli_error($mysqli_connection);
}
