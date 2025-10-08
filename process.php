<?php
session_start();

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'admin' && $password === 'password123') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
    header('Location: login.php?error=1');
    exit;
}
?>
