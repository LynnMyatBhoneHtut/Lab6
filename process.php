<?php
session_start();

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
<<<<<<< HEAD
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'admin' && $password === 'password123') {
=======
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
$token    = isset($_POST['token']) ? $_POST['token'] : '';

$correct_username = 'admin';
$correct_password = 'password123';

if ($username === $correct_username && $password === $correct_password) {
>>>>>>> 5d22ed7 (Updated LAB 6-1 files)
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
    header('Location: login.php?error=1');
    exit;
}
?>
