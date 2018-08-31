<?php

include 'scripts/dbh.php';



echo'<div class="ui dropdown item">
    Cart <i class="icon dropdown"></i>
    <div class="menu">';


$sql = "SELECT * FROM cart";
$product_result = $conn->query($sql);
while ($row = $product_result->fetch_assoc()) {

    echo"<a class='item' ><img src = '$row[pimage]' > $row[pname] : €$row[pprice] </a >";



    echo"<form action='scripts/remove.php'>
<button name='remove' class='ui inverted red button'  value='$row[idproducts]'>Remove Item</button><hr />
</form>";


    }
echo"<form action='checkout.php'>
<button name='out' class='ui inverted green button'  value='$row[idproducts]'>Check-Out</button><hr />
</form>";

    echo'</div>
</div>

<script type="text/javascript">
    $(".ui.dropdown")
        .dropdown()
</script>';