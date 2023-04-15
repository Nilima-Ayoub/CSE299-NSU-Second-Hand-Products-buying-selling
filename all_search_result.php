<?php
include_once "connection.php";

if(isset($_POST['input'])){
$input=$_POST['input'];
$query = mysqli_query(
    $mysqli_connection,
    "SELECT * FROM user_info where name like '%{$input}%' and role!='admin'");
$rowcount = mysqli_num_rows($query);
if($rowcount>0){

include_once "manage_user_table.php";

}} else{
    echo " No data to show";
}
?>


