<?php

include 'dbh.php';




$sql_del = "DELETE  FROM cart";
$cart_insert = $conn->query($sql_del);

if(isset($_POST['submit'])){
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
}