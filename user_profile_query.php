<?php
session_start();
include_once 'connection.php';

//registration
if (isset($_POST['registration'])) {
    $username = $_POST['reginame'];
    $email = $_POST['regiemail'];
    $password = $_POST['regipassword'];
    $phonenumber = $_POST['regiphonenumber'];

    $check = mysqli_query(  // checking email used or not
        $mysqli_connection,
        "SELECT * FROM user_info WHERE email_address = '$email'"
    ) or die();

    if(mysqli_num_rows($check)==0){
        if (isset($_SESSION['username']) && ($_SESSION['role'] == 'admin')) {
            $query ="INSERT INTO user_info values(default,'$username','admin','$email','$password','$phonenumber',0)";
            $registration = mysqli_query($mysqli_connection, $query);
            header('location:admin_dashboard.php');

 }
        else{        $query ="INSERT INTO user_info values(default,'$username','user','$email','$password','$phonenumber',0)";
            $registration = mysqli_query($mysqli_connection, $query);
                header('location:main.php');}}
else{
                // Redirect To registration page
                header('location: registration.php?error=Email already is in use! Please try another one.');
}
}

//Login
if (isset($_POST['login_submit'])) {
    $email = $_POST['loginemail'];
    $check = mysqli_query(
        $mysqli_connection,
        "SELECT * FROM user_info WHERE email_address = '$email'"
    ) or die();

    //Gives error if user dosen't exist
    $check2 = mysqli_num_rows($check);
    if ($check2 == 0) {
        header('location: login.php?error=no user found');
    } else {
        while ($info = mysqli_fetch_array($check)) {
            //gives error if the password is wrong
            if ($_POST['loginpwd'] != $info['password']) {
                // Redirect To login page
                header('location: login.php?error=Wrong Password');
            } else {
                $_SESSION['id'] = $info['id'];
                $_SESSION['username'] = $info['name'];
                $_SESSION['role'] = $info['role'];

                if ($_SESSION['role'] == 'admin') {
                    header('location: admin_dashboard.php');
                } elseif ($_SESSION['role'] == 'user') {
                    header('location: seller_dashboard.php');
                } else {
                    header('location: main.php');
                }
            }
        }
    }
}

//Profile edit
if (isset($_POST['edit_profile'])) {
    $username = $_POST['reginame'];
    $email = $_POST['regiemail'];
    $password = $_POST['regipassword'];
    $phonenumber = $_POST['regiphonenumber'];
    $query = "UPDATE user_info SET name='$username',email_address='$email',password='$password',phone_number='$phonenumber' WHERE id='".$_SESSION['id']."'";
    $profile_edit = mysqli_query($mysqli_connection, $query);
    if ($profile_edit && $_SESSION['role'] == 'user') {
        header('location:seller_dashboard.php');
    } elseif ($profile_edit && $_SESSION['role'] == 'admin') {
        header('location:admin_dashboard.php');
    } else {
        echo 'Error updating record: '.mysqli_error($mysqli_connection);
    }
}
