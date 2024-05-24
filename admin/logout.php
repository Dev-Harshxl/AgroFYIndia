<?php 
    session_start();
    unset($_SESSION['adid']);
    header("Location: Index.php")
?>