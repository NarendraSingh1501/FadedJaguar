<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit();
}
session_unset();
session_destroy();
if (isset($_SESSION['email'])) {
    header('location: home.php');
    exit();
}
 else {
    header('location: index.php');
}