<?php
include 'connect.php';

if(isset($_POST['deleteSend'])){
    $unique = $_POST['deleteSend'];
    $sql = "DELETE from crud WHERE id=$unique";
    $result =mysqli_query($conn, $sql);
}

?>