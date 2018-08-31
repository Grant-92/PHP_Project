<?php

include 'dbh.php';

if (isset($_GET['add'])) {
    $sql = "SELECT * FROM products WHERE idproducts = '" . $_GET['add'] . "'";//TODO not writing to db also  need  to determine which product
    $product_result = $conn->query($sql);
    $row = $product_result->fetch_assoc();

    $name = $row['pname'];
    $des =  $row['pname'];
    $type =  $row['ptype'];
    $price =  $row['pprice'];
    $img =  $row['pimage'];


    $sql_insert = "INSERT INTO cart (pname, pdescription, ptype, pprice, pimage) VALUES ('$name', '$des', '$type', $price , '$img')";

    $cart_insert = $conn->query($sql_insert);




header("Location: ../index.php");
}else{
    echo"error";
}