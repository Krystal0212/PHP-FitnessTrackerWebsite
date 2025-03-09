<?php
    // Database connection
    $database = new mysqli('localhost','root','','fitness') or die("Can't connect to database");
    mysqli_set_charset($database, 'utf8');
?>