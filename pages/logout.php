<?php
    # Start Session:
    session_start();

    unset($_SESSION['user_email']);
    header('Location: login.php');
?>