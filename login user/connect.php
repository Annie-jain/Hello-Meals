<?php
session_start();
    include 'config.php';

    $username = $_POST['username'];
	$email = $_POST['email'];
    $phn_no = $_POST['phn_no'];
	$password = md5($_POST['password']);

    $query = "INSERT into reg_user(email,phn_no,password,username), values($email,$phn_no,$password,$username)";
    if(mysqli_query($query)){
        echo "<script>alert('Wow! User Registration Completed.')</script>";
    }
?>
	