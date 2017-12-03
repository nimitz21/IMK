<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: darurat.php');
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    unset($_SESSION['location']);
    unset($_SESSION['time']);
    unset($_SESSION['dist']);
    unset($_SESSION['fake']);
    header('Location: darurat.php?batal=1');
?>