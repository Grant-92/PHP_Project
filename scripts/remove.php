<?php

include 'dbh.php';







if(isset($_GET['cremove'])){
    $sql_del = "DELETE FROM cart WHERE idproducts= '" . $_GET['cremove'] . "'";
    $cart_insert = $conn->query($sql_del);

    header("Location:  ../checkout.php");
}else {
    $sql_del = "DELETE FROM cart WHERE idproducts= '" . $_GET['remove'] . "'";
    $cart_insert = $conn->query($sql_del);
    header("Location: ../index.php");
}

