<?php 

$user_name = addslashes($_POST['name_user']);
$username_user = addslashes($_POST['login_user']);
$password_user = addslashes($_POST['password_user']);
$phone_user = addslashes($_POST['phone_user']);
$email_user = addslashes($_POST['email_user']);

// connect db
require './admin/connect.php';

// insert to db
$sql = "insert into users (ten_user, gioitinh_user, username_user, password_user, phone_user, email_user, address_user, id_roles, token)
values ('$user_name', '', '$username_user', '$password_user', '$phone_user', '$email_user', '', '3','')";
mysqli_query($connect, $sql);


// create session (name, username, email, phonenumber)
$sql = "select id_user from users where 
    ten_user = '$user_name' and 
    username_user = '$username_user' and 
    phone_user = '$phone_user' and 
    email_user = '$email_user'";

$result = mysqli_query($connect, $sql);
$id_user = mysqli_fetch_array($result)['id_user'];
session_start();

$_SESSION['id_user'] = $id_user;
$_SESSION['name_user'] = $user_name;
$_SESSION['username_user'] = $username_user;
$_SESSION['phone_user'] = $phone_user;
$_SESSION['email_user'] = $email_user;

echo 
    '<script type="text/javascript">
        alert("Bạn đã đăng ký thành công!");
        location="customer/index.php";
    </script>';

// close connect
mysqli_close($connect);