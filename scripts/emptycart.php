<?php
include "dbh.php";

$sql_del = "DELETE  FROM cart";
$cart_insert = $conn->query($sql_del);


$_SESSION['success_message']  = "Your order has been placecd";

header("Location: ../index.php");