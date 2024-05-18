<?php
session_start();
$error = '';
$notification = '';

function flashNotification(){
    global $error, $notification;

    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    if (isset($_SESSION['notification'])) {
        $notification = $_SESSION['notification']; 
        unset($_SESSION['notification']);
    }

    return [$error,$notification];
}

?>
