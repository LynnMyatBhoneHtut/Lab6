<?php
session_start();

<<<<<<< HEAD
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

include('header.inc');
?>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
<p>You have successfully logged in.</p>

<form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>

<?php include('footer.inc'); ?>
=======
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} else {
    header('Location: login.html');
    exit;
}
?>
>>>>>>> 5d22ed7 (Updated LAB 6-1 files)
