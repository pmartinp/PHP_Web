<?php
    session_start();
    session_destroy();
    header("Location: 010index.php");
?>