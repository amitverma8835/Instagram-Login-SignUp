<?php 
    $conn = mysqli_connect('localhost:3307', 'root', '', 'instagram_data');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>