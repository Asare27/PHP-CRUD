<?php
    // $servername = 'localhost';
    // $username = 'root';
    // $password = '';
    // $dbname = 'bootstrapcrud';

    $conn = new mysqli('localhost','root','','bootstrapcrud');

    if(!$conn){
        die(mysqli_error($conn));
        
    }
?>