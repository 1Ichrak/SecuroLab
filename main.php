<?php
    session_start();
    if (!isset($_SESSION['scientist_id'])) {
        header("Location: login.html");
        exit();
    }
?>
<!-- Rest of your main.html content here, but saved as main.php -->
