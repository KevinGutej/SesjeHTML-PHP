<?php
session_start();

$password = $_POST['password'];
$username = $_POST['username'];

if (isset($username) && !empty($username)) {
    if (isset($password) && !empty($password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: homepage.php');
    } else {
        echo 'The password is incorrect! <br>';
    }
} else {
    echo 'The username is incorrect! <br>';
}
