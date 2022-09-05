<?php
session_start();

if (isset ($_SESSION['password'])) {
    echo "Welcome, " + $_SESSION['username'] . "<br>";
}

echo '<a href="logout.php">LogOut</a>';